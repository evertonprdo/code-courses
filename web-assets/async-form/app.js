class FormSubmit {
    constructor(settings) {
        this.settings = settings;
        this.form = document.querySelector(settings.form);
        this.formButton = document.querySelector(settings.button);
        if (this.form) {
            this.url = this.form.getAttribute("action");
        }
        this.sendForm = this.sendForm.bind(this);
    }

    displaySuccess() {
        this.form.innerHTML = this.settings.success;   
    }
    displayError() {
        this.form.innerHTML = this.settings.error;
    }

    getFormObjetc() {
        const formObject = {};
        const fields = this.form.querySelectorAll("[name]");
        fields.forEach((field) => {
            formObject[field.getAttribute("name")] = field.value; 
        });
        return formObject;
    }

    async sendForm(event) {
        try {
            this.onSubmission(event);
            const response = await fetch(this.url, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    Accept: "application/json",
                },
            body: JSON.stringify(this.getFormObjetc()),
        });

        if (response.ok) {
            const responseData = await response.json();
            console.log(responseData.message);  // Log da mensagem de sucesso
            this.displaySuccess();
        } else {
            this.displayError();
        }

        } catch (error) {
            this.displayError();
            throw new Error(error);
        }
    }

    onSubmission(event) {
        event.preventDefault();
        event.target.disabled = true;
        event.target.innerText = "Enviando...";
    }

    init() {
        if (this.form) 
            this.formButton.addEventListener("click", this.sendForm)
        return this;
    }
}

//Inicia a classe FormSubmit que ira manipular o envio!
const formSubmit = new FormSubmit({
    form: "[data-form]",
    button: "[data-button]",
    success: "<h1 class='sucess'>Mensagem enviada!</h1>",
    error: "<h1 class='error'>Não foi possível enviar sua mensagem.</h1>",
})

formSubmit.init() //já inicia assim que carrega a página