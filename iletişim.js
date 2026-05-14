// 1. Standart JavaScript Denetimi
function checkJS() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const phoneRegex = /^[0-9]+$/;

    if (name === "" || email === "" || phone === "") {
        alert("JS Hatası: Lütfen boş alan bırakmayınız!");
    } else if (!emailRegex.test(email)) {
        alert("JS Hatası: Geçersiz e-posta formatı!");
    } else if (!phoneRegex.test(phone)) {
        alert("JS Hatası: Telefon sadece rakamlardan oluşmalıdır!");
    } else {
        alert("JS Başarılı: Form verileri uygun görünüyor.");
    }
}

// 2. Vue.js Framework Denetimi
const { createApp } = Vue;
createApp({
    data() {
        return {
            formData: { name: '', email: '', phone: '', subject: '', gender: '', message: '' }
        }
    },
    methods: {
        checkVue() {
            if (!this.formData.name || !this.formData.email) {
                alert("Vue Hatası: Ad ve E-posta zorunludur!");
                return;
            }
            alert("Vue Başarılı: Form " + this.formData.name + " adına gönderiliyor...");
            // Burada gonderilen.html sayfasına yönlendirme yapabilirsin kanka
            // window.location.href = "gonderilen.html";
        }
    }
}).mount('#app');