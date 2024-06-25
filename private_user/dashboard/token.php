<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="user_login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Token</title>


    <style>
        .token-input {
            width: 30px;
            text-align: center;
            font-size: 18px;
            margin: 5px;
        }
        .token-form button {
            width: 30%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            background-color: rgb(119, 7, 73);
            color: white;
            font-size: 18px;
            cursor: pointer;
            margin-bottom: 5px;
            transition: background-color 0.3s ease;
}
.container1
{
    background-color: rgb(119, 7, 73); 
    padding: 10px;
    height: 100vh;
    overflow-y: hidden;
    overflow-x: hidden;
}
.sub-container
{
            background-color: whitesmoke;
            width: 30%;
            text-align: center;
            font-size: 18px;
            margin: 5px;
            border-radius: 3px;
            margin-top: 150px;
            margin-left: 500px;
            
}

    </style>
</head>
<body>
    <div class="container1">
        <div class="sub-container">

            <form class="token-form" onsubmit="return validateToken()">
                        <label for="token"><strong>Enter Token</strong>  </label><br>
                        <input type="text" id="digit1" class="token-input" maxlength="1" pattern="\d" required>
                        <input type="text" id="digit2" class="token-input" maxlength="1" pattern="\d" required>
                        <input type="text" id="digit3" class="token-input" maxlength="1" pattern="\d" required>
                        <input type="text" id="digit4" class="token-input" maxlength="1" pattern="\d" required>
                        <input type="text" id="digit5" class="token-input" maxlength="1" pattern="\d" required>
                        <input type="text" id="digit6" class="token-input" maxlength="1" pattern="\d" required><br>
                        <button>Validate</button>
                    </form>

                    

        </div>
      
    
        <script>
            const inputs = document.querySelectorAll('.token-input');
    
            inputs.forEach((input, index) => {
                input.addEventListener('input', () => {
                    if (input.value.length ===1 && index < inputs.length - 1) {
                        inputs[index + 1].focus();
                    }
                });
    
                input.addEventListener('keydown', (event) => {
                    if (event.key === 'Backspace' && input.value.length === 0 && index > 0) {
                        inputs[index - 1].focus();
                    }
                });
            });
    
            function validateToken() {
                let token = '';
                inputs.forEach(input => {
                    token += input.value;
                });
    
                if (token.length === 6 && /^\d{6}$/.test(token)) {
                    // Token is valid
                    return true;
                } else {
                    alert('Invalid token.');
                    return false;
                }
            }
        </script>
   
    </div>
</body>
</html>