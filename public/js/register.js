document.addEventListener('DOMContentLoaded', function () {
    const form = document.forms['registerForm'];
    const checkbox = document.getElementById('newsletter');

    form.addEventListener('submit', function (event) {
        // Kiểm tra checkbox
        if (!checkbox.checked) {
            event.preventDefault(); // Ngăn form submit
            alert('You must agree to receive emails to register.');
            return;
        }

        // Kiểm tra các trường nhập liệu
        const name = form['name'].value.trim();
        const email = form['email'].value.trim();
        const password = form['password'].value.trim();
        const confirmPassword = form['confirm_password'].value.trim();

        if (!name || !email || !password || !confirmPassword) {
            event.preventDefault(); // Ngăn form submit
            alert('Please fill out all required fields.');
            return;
        }

        if (password !== confirmPassword) {
            event.preventDefault(); // Ngăn form submit
            alert('Password and confirm password do not match.');
            return;
        }
    });

    // Hiển thị alert từ PHP nếu có
    const resultMessage = document.getElementById('result-message');
    if (resultMessage && resultMessage.textContent.trim() !== '') {
        alert(resultMessage.textContent.trim());
    }
});