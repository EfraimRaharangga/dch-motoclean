document.addEventListener("DOMContentLoaded", () => {
  const track = document.getElementById("reviewTrack");
  if (!track) return;

  const cards = track.children;
  const totalCards = cards.length;
  let currentIndex = 0;
  const gap = 24; // Jarak antar kartu (gap-6 di Tailwind = 24px)

  function moveSlider() {
    const isMobile = window.innerWidth < 768;
    
    if (isMobile) {
      // Di HP: Geser per 1 kartu penuh
      const cardWidth = cards[0].offsetWidth;
      track.style.transform = `translateX(-${currentIndex * (cardWidth + gap)}px)`;
      currentIndex = (currentIndex + 1) % totalCards;
    } else {
      // Di Desktop: Geser per 2 kartu sekaligus (Maksimal indeks stop di totalCards - 2)
      const maxIndex = totalCards - 2;
      const cardWidth = cards[0].offsetWidth;
      
      track.style.transform = `translateX(-${currentIndex * (cardWidth + gap)}px)`;
      
      if (currentIndex >= maxIndex) {
        currentIndex = 0; // Kembali ke awal
      } else {
        currentIndex += 2; // Lompat 2 kartu
      }
    }
  }

  // Atur interval bergeser otomatis (contoh: 4000ms = 4 detik)
  let sliderInterval = setInterval(moveSlider, 4000);

  // Reset hitungan jika layar di-resize agar kalkulasi lebar kartu tetap akurat
  window.addEventListener("resize", () => {
    track.style.transform = `translateX(0px)`;
    currentIndex = 0;
    clearInterval(sliderInterval);
    sliderInterval = setInterval(moveSlider, 4000);
  });
});