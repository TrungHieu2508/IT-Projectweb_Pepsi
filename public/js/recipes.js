document.addEventListener('DOMContentLoaded', () => {
    const slidesContainer = document.querySelector('.slides');
    const slideElements = document.querySelectorAll('.slide');
    const totalOriginalSlides = 9; // Số slide gốc
    const visibleSlides = 3; // Số slide hiển thị cùng lúc
    const slideWidthPercentage = 100 / visibleSlides; // 33.33% cho 3 slide
    let slideIndex = 0;

    // Clone slide để tạo vòng lặp vô hạn
    const slidesClone = slidesContainer.cloneNode(true);
    slidesContainer.appendChild(slidesClone);

    // Nút Next
    document.querySelector('.next').addEventListener('click', () => {
        slideIndex++;
        if (slideIndex >= totalOriginalSlides) {
            slideIndex = 0;
            slidesContainer.style.transition = 'none';
            slidesContainer.style.transform = 'translateX(0)';
            setTimeout(() => {
                slidesContainer.style.transition = 'transform 0.5s ease-in-out';
            }, 50);
        }
        updateSlide();
    });

    // Nút Previous
    document.querySelector('.prev').addEventListener('click', () => {
        slideIndex--;
        if (slideIndex < 0) {
            slideIndex = totalOriginalSlides - 1;
            slidesContainer.style.transition = 'none';
            slidesContainer.style.transform = `translateX(-${(totalOriginalSlides * 2 - visibleSlides) * slideWidthPercentage}%)`;
            setTimeout(() => {
                slidesContainer.style.transition = 'transform 0.5s ease-in-out';
            }, 50);
        }
        updateSlide();
    });

    // Cập nhật vị trí slide
    function updateSlide() {
        slidesContainer.style.transform = `translateX(-${slideIndex * slideWidthPercentage}%)`;
    }

    // Tự động chuyển slide
    let autoSlide = setInterval(() => {
        document.querySelector('.next').click();
    }, 2000); // Chuyển mỗi 3 giây

    // Tạm dừng khi hover
    slidesContainer.addEventListener('mouseenter', () => {
        clearInterval(autoSlide);
    });

    slidesContainer.addEventListener('mouseleave', () => {
        autoSlide = setInterval(() => {
            document.querySelector('.next').click();
        }, 3000);
    });

    // Khởi tạo slide đầu tiên
    updateSlide();
});