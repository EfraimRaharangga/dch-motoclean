const serviceType = document.getElementById("serviceType");
const form = document.getElementById("dynamicForm");

// Gaya desain input kelas premium yang konsisten (Tailwind Classes)
const inputStyles = "w-full p-4 rounded-xl text-white mb-4 border border-gray-700/60 placeholder-gray-500 focus:outline-none focus:border-[oklch(0.58_0.22_27)] focus:ring-1 focus:ring-[oklch(0.58_0.22_27)] transition duration-200";
const buttonStyles = "w-full bg-accent hover:bg-[oklch(0.62_0.22_27)] text-white py-4 rounded-xl font-bold tracking-wider transition duration-200 transform active:scale-[0.99]";

serviceType.addEventListener("change", () => {

  if (serviceType.value === "helmet") {
    form.innerHTML = `
      <input type="text" placeholder="Nama Lengkap" class="${inputStyles}" style="background: oklch(0.26 0 0);">
      
      <input type="text" placeholder="Nomor WhatsApp (Aktif)" class="${inputStyles}" style="background: oklch(0.26 0 0);">
      
      <select class="${inputStyles}" style="background: oklch(0.26 0 0);">
        <option value="" disabled selected class="text-gray-500">Pilih Jenis Helm</option>
        <option value="full-face">Full Face</option>
        <option value="half-face">Half Face</option>
        <option value="open-face">Open Face</option>
      </select>
      
      <select class="${inputStyles}" style="background: oklch(0.26 0 0);">
        <option value="" disabled selected class="text-gray-500">Pilih Paket Cuci</option>
        <option value="basic">Basic Wash</option>
        <option value="premium">Premium Wash</option>
      </select>
      
      <textarea placeholder="Catatan Tambahan (Kondisi helm, request khusus, dll.)" rows="3" class="${inputStyles}" style="background: oklch(0.26 0 0);"></textarea>
      
      <button type="button" class="${buttonStyles}">
        BOOK NOW
      </button>
    `;
  }

  if (serviceType.value === "motor") {
    form.innerHTML = `
      <input type="text" placeholder="Nama Lengkap" class="${inputStyles}" style="background: oklch(0.26 0 0);">
      
      <input type="text" placeholder="Nomor WhatsApp (Aktif)" class="${inputStyles}" style="background: oklch(0.26 0 0);">
      
      <input type="text" placeholder="Jenis / Model Motor (Contoh: Vario, Aerox)" class="${inputStyles}" style="background: oklch(0.26 0 0);">
      
      <select class="${inputStyles}" style="background: oklch(0.26 0 0);">
        <option value="" disabled selected class="text-gray-500">Pilih Layanan Detailing</option>
        <option value="basic-detail">Basic Detail</option>
        <option value="premium-detail">Premium Detail</option>
        <option value="ceramic-coating">Nano Ceramic Coating</option>
      </select>
      
      <textarea placeholder="Catatan Khusus (Bagian yang ingin difokuskan, noda parah, dll.)" rows="3" class="${inputStyles}" style="background: oklch(0.26 0 0);"></textarea>
      
      <button type="button" class="${buttonStyles}">
        BOOK NOW
      </button>
    `;
  }

  // Jika pilihan dikembalikan ke default (kosong)
  if (serviceType.value === "") {
    form.innerHTML = "";
  }

});