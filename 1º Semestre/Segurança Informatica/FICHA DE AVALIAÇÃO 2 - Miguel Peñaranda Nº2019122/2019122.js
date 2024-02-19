function validateEmail() {
           
    const emailInput = document.getElementById('email');
    const email = emailInput.value.trim();

    if (email === '') {
        return false;
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    if (emailRegex.test(email)) {
       return true;
    } else {
        return false
    }
}

function encryptEmailwithMD5() {
    const emailInput = document.getElementById('email');

    if (emailInput.value === '') {
        const errorEmail = document.getElementById('errorEmail');
        const emailEncrypted = document.getElementById('emailEncrypted');
        if (!emailEncrypted.classList.contains('hidden')) {
            emailEncrypted.classList.toggle('hidden');
        }
        if (errorEmail.classList.contains('hidden')) {
            errorEmail.classList.toggle('hidden');
            errorEmail.innerText = 'É necessário inserir um email';
        } else {
            errorEmail.innerText = 'É necessário inserir um email';
        }
        
    } else {
        const emailValid = validateEmail();

        if (emailValid) {
            var hash = CryptoJS.MD5(emailInput.value);
            var hashString = hash.toString(CryptoJS.enc.Base64);
            const emailEncrypted = document.getElementById('emailEncrypted');
            const errorEmail = document.getElementById('errorEmail');
            if (!errorEmail.classList.contains('hidden')) {
                errorEmail.classList.toggle('hidden');
            }
            if (emailEncrypted.classList.contains('hidden')) {
                emailEncrypted.classList.toggle('hidden');
                emailEncrypted.innerText = "Encriptado com MD5: " + hashString;
            } else {
                emailEncrypted.innerText = "Encriptado com MD5: " + hashString;
            }

        } else {
            const errorEmail = document.getElementById('errorEmail');
            const emailEncrypted = document.getElementById('emailEncrypted');

            if (!emailEncrypted.classList.contains('hidden')) {
                emailEncrypted.classList.toggle('hidden');
            }

            if (errorEmail.classList.contains('hidden')) {
                errorEmail.classList.toggle('hidden');
                errorEmail.innerText = 'O email inserido não é válido';
            } else {
                errorEmail.innerText = 'O email inserido não é válido';
            }
        }
    }
}

function encryptEmailwithSHA1() {
    const emailInput = document.getElementById('email');

    if (emailInput.value === '') {
        const errorEmail = document.getElementById('errorEmail');
        const emailEncrypted = document.getElementById('emailEncrypted');
        if (!emailEncrypted.classList.contains('hidden')) {
            emailEncrypted.classList.toggle('hidden');
        }
        if (errorEmail.classList.contains('hidden')) {
            errorEmail.classList.toggle('hidden');
            errorEmail.innerText = 'É necessário inserir um email';
        } else {
            errorEmail.innerText = 'É necessário inserir um email';
        }
        
    } else {
        const emailValid = validateEmail();

        if (emailValid) {
            var hash = CryptoJS.SHA1(emailInput.value);
            var hashString = hash.toString(CryptoJS.enc.Base64);
            const emailEncrypted = document.getElementById('emailEncrypted');
            const errorEmail = document.getElementById('errorEmail');
            if (!errorEmail.classList.contains('hidden')) {
                errorEmail.classList.toggle('hidden');
            }
            if (emailEncrypted.classList.contains('hidden')) {
                emailEncrypted.classList.toggle('hidden');
                emailEncrypted.innerText = "Encriptado com SHA-1: " + hashString;
            } else {
                emailEncrypted.innerText = "Encriptado com SHA-1: " + hashString;
            }

        } else {
            const errorEmail = document.getElementById('errorEmail');
            const emailEncrypted = document.getElementById('emailEncrypted');

            if (!emailEncrypted.classList.contains('hidden')) {
                emailEncrypted.classList.toggle('hidden');
            }

            if (errorEmail.classList.contains('hidden')) {
                errorEmail.classList.toggle('hidden');
                errorEmail.innerText = 'O email inserido não é válido';
            } else {
                errorEmail.innerText = 'O email inserido não é válido';
            }
        }
    }
}

function encryptEmailwithSHA256() {
    const emailInput = document.getElementById('email');

    if (emailInput.value === '') {
        const errorEmail = document.getElementById('errorEmail');
        const emailEncrypted = document.getElementById('emailEncrypted');
        if (!emailEncrypted.classList.contains('hidden')) {
            emailEncrypted.classList.toggle('hidden');
        }
        if (errorEmail.classList.contains('hidden')) {
            errorEmail.classList.toggle('hidden');
            errorEmail.innerText = 'É necessário inserir um email';
        } else {
            errorEmail.innerText = 'É necessário inserir um email';
        }
        
    } else {
        const emailValid = validateEmail();

        if (emailValid) {
            var hash = CryptoJS.SHA256(emailInput.value);
            var hashString = hash.toString(CryptoJS.enc.Base64);
            const emailEncrypted = document.getElementById('emailEncrypted');
            const errorEmail = document.getElementById('errorEmail');
            if (!errorEmail.classList.contains('hidden')) {
                errorEmail.classList.toggle('hidden');
            }
            if (emailEncrypted.classList.contains('hidden')) {
                emailEncrypted.classList.toggle('hidden');
                emailEncrypted.innerText = "Encriptado com SHA256: " + hashString;
            } else {
                emailEncrypted.innerText = "Encriptado com SHA256: " + hashString;
            }

        } else {
            const errorEmail = document.getElementById('errorEmail');
            const emailEncrypted = document.getElementById('emailEncrypted');

            if (!emailEncrypted.classList.contains('hidden')) {
                emailEncrypted.classList.toggle('hidden');
            }

            if (errorEmail.classList.contains('hidden')) {
                errorEmail.classList.toggle('hidden');
                errorEmail.innerText = 'O email inserido não é válido';
            } else {
                errorEmail.innerText = 'O email inserido não é válido';
            }
        }
    }
}

function encryptMessage(){
    const messageInput = document.getElementById('mensagem');
    const keyInput = document.getElementById('key');

    if (messageInput.value == "" ){
        const errorMsg = document.getElementById('errorMsg');
        const msgEncrypted = document.getElementById('msgEncrypted');
        if (!msgEncrypted.classList.contains('hidden')) {
            msgEncrypted.classList.toggle('hidden');
        }
        if (errorMsg.classList.contains('hidden')) {
            errorMsg.classList.toggle('hidden');
            errorMsg.innerText = 'Ainda não introduziu uma mensagem';
        } else {
            errorMsg.innerText = 'Ainda não introduziu uma mensagem';
        }
    } else if (keyInput.value == "") {
        const errorMsg = document.getElementById('errorMsg');
        const msgEncrypted = document.getElementById('msgEncrypted');
        if (!msgEncrypted.classList.contains('hidden')) {
            msgEncrypted.classList.toggle('hidden');
        }
        if (errorMsg.classList.contains('hidden')) {
            errorMsg.classList.toggle('hidden');
            errorMsg.innerText = 'Ainda não introduziu uma chave de encriptação';
        } else {
            errorMsg.innerText = 'Ainda não introduziu uma chave de encriptação';
        }
    } else {
        var encrypted = CryptoJS.AES.encrypt(messageInput.value, keyInput.value);
        const errorMsg = document.getElementById('errorMsg');
        const msgEncrypted = document.getElementById('msgEncrypted');
        if (!errorMsg.classList.contains('hidden')) {
            errorMsg.classList.toggle('hidden');
        }
        if (msgEncrypted.classList.contains('hidden')) {
            msgEncrypted.classList.toggle('hidden');
            msgEncrypted.innerText = "Mensagem Encriptada: " + encrypted.toString();
        } else {
            msgEncrypted.innerText = "Mensagem Encriptada: " + encrypted.toString();
        }

        messageInput.value = "";
        keyInput.value = "";
    }
}

function decryptMessage(){
    const messageInput = document.getElementById('mensagem');
    const keyInput = document.getElementById('key');

    if (messageInput.value == "" ){
        const errorMsg = document.getElementById('errorMsg');
        const msgEncrypted = document.getElementById('msgEncrypted');
        if (!msgEncrypted.classList.contains('hidden')) {
            msgEncrypted.classList.toggle('hidden');
        }
        if (errorMsg.classList.contains('hidden')) {
            errorMsg.classList.toggle('hidden');
            errorMsg.innerText = 'Ainda não introduziu uma mensagem';
        } else {
            errorMsg.innerText = 'Ainda não introduziu uma mensagem';
        }
    } else if (keyInput.value == "") {
        const errorMsg = document.getElementById('errorMsg');
        const msgEncrypted = document.getElementById('msgEncrypted');
        if (!msgEncrypted.classList.contains('hidden')) {
            msgEncrypted.classList.toggle('hidden');
        }
        if (errorMsg.classList.contains('hidden')) {
            errorMsg.classList.toggle('hidden');
            errorMsg.innerText = 'Ainda não introduziu uma chave de encriptação';
        } else {
            errorMsg.innerText = 'Ainda não introduziu uma chave de encriptação';
        }
    } else {
        var decrypted = CryptoJS.AES.decrypt(messageInput.value, keyInput.value);

        if (decrypted.sigBytes <= 0) {
            const errorMsg = document.getElementById('errorMsg');
            const msgEncrypted = document.getElementById('msgEncrypted');
            if (!msgEncrypted.classList.contains('hidden')) {
                msgEncrypted.classList.toggle('hidden');
            }
            if (errorMsg.classList.contains('hidden')) {
                errorMsg.classList.toggle('hidden');
                errorMsg.innerText = 'A chave de encriptação está errada';
            } else {
                errorMsg.innerText = 'A chave de encriptação está errada';
            }
            
        } else {
            const errorMsg = document.getElementById('errorMsg');
            const msgEncrypted = document.getElementById('msgEncrypted');
            if (!errorMsg.classList.contains('hidden')) {
                errorMsg.classList.toggle('hidden');
            }
            if (msgEncrypted.classList.contains('hidden')) {
                msgEncrypted.classList.toggle('hidden');
                msgEncrypted.innerText = "Mensagem Desencriptada: " + decrypted.toString(CryptoJS.enc.Utf8);
            } else {
                msgEncrypted.innerText = "Mensagem Desencriptada: " + decrypted.toString(CryptoJS.enc.Utf8);
            }

            messageInput.value = "";
            keyInput.value = "";
        }
    }
}