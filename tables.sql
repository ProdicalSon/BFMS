SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+03:00";

create database bungoma_filing_system_DB;
use bungoma_filing_system_DB;
CREATE TABLE USER_DETAILS_TBL(
		user_id int primary key auto_increment,
        f_name varchar(50) not null default 'User',
        l_name varchar(50) default 'Name',
        other_name varchar(50) ,
        employee_number int unique,
        department_description varchar(255),
        email varchar(100) not null unique
                        );
CREATE TABLE DEPARTMENT_TBL(
				department_id int primary key auto_increment,
                department_name varchar(100) not null unique,
                department_category varchar(50) not null default 'ict',
                department_description varchar(255)
                            );
CREATE TABLE TOKENS_TBL(
			token_id int primary key auto_increment,
            user_id int not null ,
            token varchar(255) not null,
            access_level int not null default 3,
            department_id int not null,
            date_generated datetime not null default now(),
            period_of_validity int not null default 365,
            time_of_expiry_in_session datetime ,
            is_used boolean not null default false,
            constraint tokens_to_users_user_id_fk
            foreign key(user_id) references USER_DETAILS_TBL(user_id),
            constraint tokens_to_department_department_id_fk
            foreign key(department_id) references DEPARTMENT_TBL(department_id)
						);
CREATE TABLE USER_lOGIN_TBL(
		reference_code INT PRIMARY KEY auto_increment,
        user_id int not null,
        token_id int not null,
        user_national_id int not null unique,
        user_name varchar(50) not null unique,
        user_password varchar(100) default 'user@123',
		constraint user_login_to_users_user_id_fk
		foreign key(user_id) references USER_DETAILS_TBL(user_id), 
        constraint user_login_to_tokens_token_id_fk
		foreign key(token_id) references TOKENS_TBL(token_id)
);
CREATE TABLE USER_LOGIN_LOGS_TBL(
					login_id int primary key auto_increment,
                    user_id int,
                    time_logged_in datetime default now(),
                    is_logged_out boolean default false,
                    time_logged_out datetime,
					constraint user_login_to_user_details_user_id_fk
					foreign key(user_id) references USER_DETAILS_TBL(user_id)
                                );
CREATE TABLE SESSION_TBL(
			session_id int primary key auto_increment,
			login_id int,
            time_started datetime default now(),
            time_expired datetime ,
            agent_device_ip varchar(255),
            agent_device_name varchar(100),
            is_active boolean default false,
			constraint user_sessions_to_user_login_logs_login_id_fk
			foreign key(login_id) references USER_LOGIN_LOGS_TBL(login_id)
                        );
CREATE TABLE DASHBOARD_MENU_ITEMS_TBL(
			item_id int primary key auto_increment,
            item_name varchar(50) not null default 'option',
            item_icon varchar(100) default 'more_vert',
            item_active boolean default false
                                    );
CREATE TABLE MENU_USER_ACCESS_LEVEL_TBL(
			access_id int primary key auto_increment,
            item_id int,
            user_id int,
            is_active boolean default true,
			constraint user_menu_user_access_items_to_dashboard_menu_items_item_id_fk
			foreign key(item_id) references DASHBOARD_MENU_ITEMS_TBL(item_id),
			constraint user_menu_access_items_to_users_user_id_fk
			foreign key(user_id) references USER_DETAILS_TBL(user_id)
                                        );
CREATE TABLE FILE_CATEGORY_TBL(
			category_id int primary key auto_increment,
            category_name varchar(100) not null default 'generalfiles',
            category_description varchar(255),
            color_label varchar(50) default 'rgb(255,255,255)'
								);
CREATE TABLE FILE_TBL(
			file_id int primary key auto_increment,
            file_name varchar(255) not null,
            file_type varchar(50) not null,
            file_format varchar(50) not null,
            file_description varchar(50),
            file_size bigint,
            file_category_id int ,
            date_of_upload datetime not null default now(),
            uploader_user_id int ,
            file_access_level int,
			constraint files_to_users_user_id_fk
			foreign key(uploader_user_id) references USER_DETAILS_TBL(user_id),
			constraint files_to_category_category_id_fk
			foreign key(file_category_id) references FILE_CATEGORY_TBL(category_id)
						);
CREATE TABLE FILE_DOWNLOAD_TABLE(
			download_id int primary key auto_increment,
            file_id int,
            time_of_download datetime default now(),
            downloader_user_id int,
            constraint file_downaload_to_file_file_id_fk
			foreign key(file_id) references FILE_TBL(file_id)
                                );
