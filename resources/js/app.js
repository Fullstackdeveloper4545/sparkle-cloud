import './bootstrap';
  const scrollBox = document.getElementById("processScroll");
  const fill = document.querySelector(".process-indicator-fill");
  const dot = document.getElementById("progressDot");
  const steps = [...document.querySelectorAll(".process-step")];

  scrollBox.addEventListener("scroll", () => {
    const maxScroll = scrollBox.scrollHeight - scrollBox.clientHeight;
    const scrollTop = scrollBox.scrollTop;

    /* Progress bar movement */
    const progress = scrollTop / maxScroll;
    const percent = progress * 100;
    fill.style.height = percent + "%";
    dot.style.top = percent + "%";

    /* 🔒 FORCE STEP 1 AT TOP */
    if (scrollTop < steps[1].offsetTop - 40) {
      dot.textContent = "01";
      return;
    }

    /* Detect active step */
    for (let i = steps.length - 1; i >= 0; i--) {
      if (scrollTop >= steps[i].offsetTop - 60) {
        dot.textContent = steps[i].dataset.step;
        break;
      }
    }
  });
document.addEventListener('DOMContentLoaded', () => {
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach((item) => {
        const header = item.querySelector('.faq-item__header');
        if (!header) return;
        header.addEventListener('click', () => {
            item.classList.toggle('is-open');
        });
    });

    const pricingFaqItems = document.querySelectorAll('.pricing-faq__item');
    pricingFaqItems.forEach((item) => {
        const trigger = item.querySelector('.pricing-faq__question');
        if (!trigger) return;
        trigger.addEventListener('click', () => {
            item.classList.toggle('is-open');
        });
    });
});

function fixButtonBorder() {
  const buttons = document.querySelectorAll('.btn-svg, .btn');
  buttons.forEach((btn) => {
    const svg = btn.querySelector('.border-svg, .svg');
    const rect = btn.querySelector('.border-path, .path');
    if (!svg || !rect) return;

    const w = btn.offsetWidth;
    const h = btn.offsetHeight;
    const r = h / 2;
    if (!w || !h) return;

    svg.setAttribute('viewBox', `0 0 ${w} ${h}`);

    rect.setAttribute('x', 0.5);
    rect.setAttribute('y', 0.5);
    rect.setAttribute('width', w - 1);
    rect.setAttribute('height', h - 1);
    rect.setAttribute('rx', r);
    rect.setAttribute('ry', r);

    const length = rect.getTotalLength();
    const dash = length * 0.12;
    const gap = length - dash;

    rect.style.strokeDasharray = `${dash} ${gap}`;
    rect.style.strokeDashoffset = 0;

    rect.getAnimations().forEach((animation) => animation.cancel());
    rect.animate(
      [
        { strokeDashoffset: 0 },
        { strokeDashoffset: -length }
      ],
      {
        duration: 4000,
        iterations: Infinity,
        easing: "linear"
      }
    );
  });
}

fixButtonBorder();
window.addEventListener('resize', fixButtonBorder);
