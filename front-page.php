<?php get_header(); ?>
<main class="w-full pt-20 bg-surface min-h-[calc(100vh-20rem)]"><div class="flex flex-col w-full">
<!-- HERO SECTION WITH MODERN ARCHITECTURAL AMBIENCE (Ref: Layout Structure) -->
<section class="relative w-full overflow-hidden bg-surface-container-low -mt-20 pt-32 pb-20 md:pb-24">
<!-- Atmospheric modern background backdrop matching the inspiration structure -->
<div class="absolute inset-0 z-0">
<div class="w-full h-full bg-cover bg-center object-cover opacity-25 mix-blend-luminosity" data-alt="Modern corporate architectural campus innovation center with sleek glass facades, reflective clean pavement at dusk, soft ambient evening lights, cutting-edge digital printing tech wing, university modern library aesthetic, high dynamic range in slate blue, cool cyan and soft warm ambient glow" style="background-image: url(&quot;https://lh3.googleusercontent.com/aida-public/AB6AXuBQjWdhXdjdtGm4QnFGxd0qWlAVRoMDpzz_WlL1cHMaXHf8sQ72hPR7lYZNr3TJ32M18q-d7uUIpHeqIJ4TCxxk3gWFow1PojrqKfbohsHuWUpZ9biU6WhbtJV1liFG7ktpj0bztXMNS9Kc_uOWJPTGIrtGoBE70Lkb_zGt9M1uSBB7TIXaWzD_RtqG1NZo3Z7_GDlfkJJcxNrQ4YjoiNnlBMLoEgmQmfuctZsoFAs&quot;);">
</div>
<div class="absolute inset-0 bg-gradient-to-r from-surface via-surface/90 to-surface-container-low/40"></div>
</div>
<div class="relative z-10 max-w-[1240px] mx-auto px-margin">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-center">
<!-- Text Content Column -->
<div class="lg:col-span-7 flex flex-col gap-space-lg">

<div class="flex flex-col gap-space-sm">
<h1 class="font-headline-xxl text-headline-xxl text-on-surface tracking-tight leading-[1.15]">
              Solusi Cetak Cepat &amp; Berkualitas, <span class="text-secondary">Sahabat Mahasiswa</span> Setiap Waktu
            </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl leading-relaxed mt-space-xs">
              Cetak skripsi, laporan, makalah, poster riset ilmiah, hingga merchandise organisasi kampus dengan hasil cetak super tajam, harga ramah kantong, dan garansi antar tepat waktu sampai ke ruang sidang.
            </p>
</div>
<!-- Dual CTA Buttons matching inspiration style -->
<div class="flex flex-wrap items-center gap-2 sm:gap-3 pt-space-xs">
<a class="flex-1 sm:flex-none whitespace-nowrap inline-flex items-center justify-center gap-1.5 px-3.5 py-2 sm:px-5 sm:py-2.5 bg-secondary-container text-on-secondary-fixed font-semibold text-[13px] sm:text-sm rounded-lg shadow-sm hover:bg-secondary-fixed-dim transition-all" href="https://wa.me/6281234567890?text=Halo%20Admin%20printno.id,%20saya%20ingin%20cetak%20dokumen/skripsi" rel="noopener noreferrer" target="_blank"><span class="material-symbols-outlined text-[16px] sm:text-[18px]">chat</span><span class="">Pesan via WhatsApp</span></a>
</div>
<!-- Micro Trust Elements -->

</div>
<!-- Hero Banner Image (theme asset) -->
<?php
  $hero_img = '';
  foreach (array('asset/image', 'assets/image', 'image', 'asset/images', 'assets/images', 'images') as $hero_dir) {
    if (file_exists(get_template_directory() . '/' . $hero_dir . '/hero-banner.jpg')) {
      $hero_img = get_template_directory_uri() . '/' . $hero_dir . '/hero-banner.jpg';
      break;
    }
  }
  if (!$hero_img) { $hero_img = get_template_directory_uri() . '/asset/image/hero-banner.jpg'; }
?>
<div class="lg:col-span-5 relative">
<div class="absolute -inset-4 rounded-[2.25rem] bg-gradient-to-br from-secondary-container/30 via-transparent to-primary-container/10 blur-2xl pointer-events-none"></div>
<div class="relative w-full h-[240px] sm:h-[340px] lg:h-[460px] rounded-3xl overflow-hidden shadow-2xl ring-1 ring-black/5 bg-surface-container-highest">
<img src="<?php echo esc_url($hero_img); ?>" alt="Layanan cetak digital printno.id untuk mahasiswa" class="w-full h-full object-cover" fetchpriority="high" decoding="async">
<div class="absolute inset-0 bg-gradient-to-t from-primary-container/35 via-transparent to-transparent pointer-events-none"></div>
</div>
</div>
</div>
</div>
</section>
<!-- STATS BAR (clean) -->
<section class="w-full max-w-[1240px] mx-auto px-margin pt-16 md:pt-20">
<div class="grid grid-cols-2 lg:grid-cols-4 gap-y-10 py-space-xl border-y border-outline-variant/30 lg:divide-x lg:divide-outline-variant/30">
<div class="flex flex-col items-center text-center gap-1 px-space-md">
<div class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">50.000+</div>
<div class="font-label-md text-label-md text-on-surface-variant">Halaman Dicetak / Hari</div>
</div>
<div class="flex flex-col items-center text-center gap-1 px-space-md">
<div class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">1.200+</div>
<div class="font-label-md text-label-md text-on-surface-variant">Skripsi &amp; Tugas Terjilid</div>
</div>
<div class="flex flex-col items-center text-center gap-1 px-space-md">
<div class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">25+</div>
<div class="font-label-md text-label-md text-on-surface-variant">Kampus &amp; Fakultas Mitra</div>
</div>
<div class="flex flex-col items-center text-center gap-1 px-space-md">
<div class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">99.8%</div>
<div class="font-label-md text-label-md text-on-surface-variant">Tingkat Kepuasan Sidang</div>
</div>
</div>
</section>
<!-- SECTION 3: LAYANAN CETAK PRIORITAS MAHASISWA (Ref: 4 Column Clean Grid) -->

<!-- INTERACTIVE LIVE PRINT CALCULATOR SNIPPET (Tactile Minimalist Student Experience) -->

<!-- SECTION 4: 5 POSTINGAN & TIPS CETAK TERBARU (Student Knowledge Base) -->
<section class="w-full py-16 md:py-20">
<div class="max-w-[1240px] mx-auto px-margin">
<!-- Section Header -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md mb-space-xl"><div><span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">KNOWLEDGE BASE</span><h2 class="font-headline-xl text-headline-xl text-on-surface tracking-tight mt-1">5 Postingan &amp; Tips Cetak Terbaru</h2><p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mt-1">Panduan teknis dan referensi format agar dokumen akademik bebas revisi saat dicek perpustakaan dan dosen pembimbing.</p></div></div>
<!-- Bento-style Article Layout featuring 5 distinct posts -->
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
<!-- Post 1 (Featured - Large card span 7) -->
<article class="md:col-span-7 bg-surface-container-lowest rounded-3xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between group">
<div class="relative h-64 w-full bg-surface-container-high overflow-hidden">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Editorial desk with opened thesis manuscript, red markup pen, digital caliper checking paper margins, laptop screen showing thesis layout rules, clean modern university aesthetic with warm table lighting" style="background-image: url(&quot;https://lh3.googleusercontent.com/aida-public/AB6AXuCI6fiDKWXf0YxBBHePyfhkgrjIPbpFjEs-1bBuCo4pVFxG9XTyoop8IGqhyf07f8LfCiBYOAWgwJbiizCReJEHdPjWLhmqibqHHPs6BXkJFvSx2fdovng0C1wmHNmoFHN2_bXTpekUlKqeghs4QwcZta9w1HvKnO26tmdz_U-_mzuyiqUtZ5mb1ssMbb3lgrx3cgPBfGKIK0u-L_PUWd54IEOQH_fk1Lq7q9NBYwE&quot;);">
</div>
<div class="absolute top-4 left-4">
<span class="px-space-md py-1 bg-surface-container-lowest/90 backdrop-blur-md text-secondary font-label-sm text-label-sm rounded-full">
                Skripsi &amp; Tugas Akhir
              </span>
</div>
</div>
<div class="p-space-lg flex flex-col gap-space-sm">
<div class="flex items-center gap-space-md text-on-surface-variant font-label-sm text-label-sm">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">calendar_today</span> 24 Okt 2025</span>
<span class="">•</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">schedule</span> 6 menit baca</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-secondary transition-colors">
              Panduan Format Cetak Skripsi &amp; Tugas Akhir Bebas Margin Error
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant line-clamp-2">
              Aturan baku margin 4-4-3-3, trik penomoran halaman ganjil-genap bab terpisah, serta pengaturan orientasi landscape tabel lampiran tanpa merusak struktur file.
            </p>
</div>
</article>
<!-- Post 2 (Span 5) -->
<article class="md:col-span-5 bg-surface-container-lowest rounded-3xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between group">
<div class="relative h-64 w-full bg-surface-container-high overflow-hidden">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Macro texture view comparison between 70gsm smooth translucent white paper versus 80gsm heavy bright white paper stack next to fountain pen, high details crisp daylight laboratory lighting" style="background-image: url(&quot;https://lh3.googleusercontent.com/aida-public/AB6AXuDQwdiZCBFr51fZGQ0iHoREoWRaQSRM2Pf-1nzfLjKp0T3Jh3Dnl6lgzn5SyBqGUMRoFP42xGwuhSM0wrMAR1EEA_jWuVUYQGxZdd691g3-xaC6wkPsJf4NV--HlvUXAtTlNpVA5BraNMppNucMVOiYAkc1Sdkd9qGhslGgbF52uJgkrSFsfhEtU1eGNSzF1u4a5mAIAE-F82JYuIGnqctt7j_YkXpheTiZpItOkRc&quot;);">
</div>
<div class="absolute top-4 left-4">
<span class="px-space-md py-1 bg-surface-container-lowest/90 backdrop-blur-md text-secondary font-label-sm text-label-sm rounded-full">
                Material Cetak
              </span>
</div>
</div>
<div class="p-space-lg flex flex-col gap-space-sm">
<div class="flex items-center gap-space-md text-on-surface-variant font-label-sm text-label-sm">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">calendar_today</span> 20 Okt 2025</span>
<span class="">•</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">schedule</span> 4 menit baca</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-secondary transition-colors">
              Mengenal Perbedaan Kertas HVS 70gsm vs 80gsm untuk Laporan Akademik
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant line-clamp-2">
              Kapan harus memakai 70gsm demi hemat anggaran makalah harian, dan mengapa wajib 80gsm untuk berkas sidang akhir universitas.
            </p>
</div>
</article>
<!-- Post 3 (Col 4) -->
<article class="md:col-span-4 bg-surface-container-lowest rounded-3xl p-space-lg shadow-sm hover:shadow-lg transition-all flex flex-col justify-between group">
<div class="flex flex-col gap-space-sm">
<div class="flex items-center justify-between">
<span class="px-space-md py-1 bg-surface-container text-on-surface font-label-sm text-label-sm rounded-full">
                Finishing &amp; Jilid
              </span>
<span class="font-label-sm text-label-sm text-on-surface-variant">5 min read</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-secondary transition-colors mt-space-xs">
              Cara Memilih Jenis Jilid: Hardcover Emboss vs Softcover Spiral Kawat
            </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-3">
              Bedah ketahanan penjilidan benang, lem panas binding, serta standar warna cover masing-masing fakultas (Biru Teknik, Hijau Pertanian, Kuning FISIP).
            </p>
</div>
</article>
<!-- Post 4 (Col 4) -->
<article class="md:col-span-4 bg-surface-container-lowest rounded-3xl p-space-lg shadow-sm hover:shadow-lg transition-all flex flex-col justify-between group">
<div class="flex flex-col gap-space-sm">
<div class="flex items-center justify-between">
<span class="px-space-md py-1 bg-surface-container text-on-surface font-label-sm text-label-sm rounded-full">
                Teknis Grafis
              </span>
<span class="font-label-sm text-label-sm text-on-surface-variant">3 min read</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-secondary transition-colors mt-space-xs">
              Tips Mengatur File PDF Siap Cetak (Color Profile CMYK vs RGB)
            </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-3">
              Hindari warna hasil cetak kusam atau gelap. Langkah konversi profil warna desain Canva &amp; Adobe Illustrator agar warna monitor sama persis dengan hasil cetak.
            </p>
</div>
</article>
<!-- Post 5 (Col 4) -->
<article class="md:col-span-4 bg-surface-container-lowest rounded-3xl p-space-lg shadow-sm hover:shadow-lg transition-all flex flex-col justify-between group">
<div class="flex flex-col gap-space-sm">
<div class="flex items-center justify-between">
<span class="px-space-md py-1 bg-surface-container text-on-surface font-label-sm text-label-sm rounded-full">
                Poster Ilmiah
              </span>
<span class="font-label-sm text-label-sm text-on-surface-variant">7 min read</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-secondary transition-colors mt-space-xs">
              Panduan Cetak Poster Riset Ilmiah &amp; Presentasi Seminar Internasional
            </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-3">
              Rasio resolusi minimal 300 DPI ukuran A1/A0, pemilihan media albatros anti kusut saat dibawa naik pesawat, hingga perlindungan laminasi doff anti silau lampu proyektor.
            </p>
</div>
</article>
</div>
</div>
</section>
<!-- SECTION 5: KEUNGGULAN & TESTIMONI MAHASISWA (Modern Clean Corporate Proof) -->
<section class="w-full py-space-xl bg-surface-container-low">
<div class="max-w-[1240px] mx-auto px-margin">
<!-- Feature Split Architecture -->

<!-- Testimonial Cards Carousel / Row -->
<div class="pt-space-md">
<div class="flex items-center justify-between mb-space-lg">
<h3 class="font-headline-md text-headline-md text-on-surface">Kata Rekan Mahasiswa &amp; Dosen</h3>
<div class="flex items-center gap-1 text-secondary-container">
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: &quot;FILL&quot; 1;">star</span>
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: &quot;FILL&quot; 1;">star</span>
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: &quot;FILL&quot; 1;">star</span>
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: &quot;FILL&quot; 1;">star</span>
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: &quot;FILL&quot; 1;">star</span>
<span class="font-headline-sm text-headline-sm text-on-surface ml-1">4.96 / 5.00</span>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<!-- Testimonial 1 -->
<div class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm flex flex-col justify-between">
<p class="font-body-md text-body-md text-on-surface-variant italic mb-space-lg">
              "Paling penyelamat! Jam 11 malam baru dapet acc dosen buat cetak 4 rangkap hardcover sidang besok jam 9 pagi. Jam 8 pagi udah dianter driver printno.id ke lobi dekanat dengan pita pembatas rapi banget."
            </p>
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center font-headline-sm text-headline-sm text-secondary">
                RA
              </div>
<div>
<h5 class="font-headline-sm text-headline-sm text-on-surface">Rian Ardiansyah</h5>
<p class="font-label-sm text-label-sm text-on-surface-variant">Teknik Informatika • Univ. Indonesia</p>
</div>
</div>
</div>
<!-- Testimonial 2 -->
<div class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm flex flex-col justify-between">
<p class="font-body-md text-body-md text-on-surface-variant italic mb-space-lg">
              "Poster riset A0 bahan albatros-nya tebel dan nggak silau pas dipajang di poster session seminar internasional. Font 10pt di diagram metodologi tetep terbaca tajam tanpa pecah sama sekali."
            </p>
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center font-headline-sm text-headline-sm text-secondary">
                NW
              </div>
<div>
<h5 class="font-headline-sm text-headline-sm text-on-surface">Nadia Wardhani</h5>
<p class="font-label-sm text-label-sm text-on-surface-variant">Magister Bioteknologi • ITB</p>
</div>
</div>
</div>
<!-- Testimonial 3 -->
<div class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm flex flex-col justify-between">
<p class="font-body-md text-body-md text-on-surface-variant italic mb-space-lg">
              "Pesen 300 pcs lanyard panitia dan booklet acara dies natalis BEM. Warnanya konsisten sama identitas warna fakultas, potongannya rapi, dan admin WhatsApp-nya komunikatif banget ngingetin margin aman."
            </p>
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center font-headline-sm text-headline-sm text-secondary">
                FK
              </div>
<div>
<h5 class="font-headline-sm text-headline-sm text-on-surface">Fahmi Kurniawan</h5>
<p class="font-label-sm text-label-sm text-on-surface-variant">Ketua Panitia Acara BEM • UGM</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
<!-- Simple Vanilla JS for the live print calculator -->
<script>
  function calculatePrice() {
    var paperPrice = parseFloat(document.getElementById('paperType').value) || 225;
    var printMultiplier = parseFloat(document.getElementById('printMode').value) || 1;
    var bindingCost = parseFloat(document.getElementById('bindingType').value) || 35000;
    var pages = parseInt(document.getElementById('pageCount').value) || 0;

    if (pages < 1) pages = 1;

    var printingSubtotal = (paperPrice * printMultiplier) * pages;
    var total = Math.round(printingSubtotal + bindingCost);

    var formatted = new Intl.NumberFormat('id-ID', {
      style: 'currency',
      currency: 'IDR',
      maximumFractionDigits: 0
    }).format(total);

    var displayEl = document.getElementById('priceDisplay');
    if (displayEl) {
      displayEl.textContent = formatted.replace('Rp', 'Rp ');
    }
  }
</script></main>
<script>tailwind.config = { darkMode: "class", theme: { extend: { "colors": { "tertiary-container": "#001f29", "on-surface": "#0b1c30", "tertiary-fixed-dim": "#81d1f0", "on-error-container": "#93000a", "inverse-primary": "#bac8dc", "on-tertiary": "#ffffff", "surface-container": "#e5eeff", "error": "#ba1a1a", "surface-dim": "#cbdbf5", "on-secondary-fixed": "#2a1700", "surface-container-highest": "#d3e4fe", "tertiary": "#000000", "on-primary-container": "#778598", "surface-container-lowest": "#ffffff", "secondary": "#855300", "surface-tint": "#525f71", "inverse-surface": "#213145", "surface-bright": "#f8f9ff", "on-tertiary-fixed-variant": "#004d62", "secondary-container": "#fea619", "on-secondary-fixed-variant": "#653e00", "on-tertiary-container": "#388eaa", "on-primary": "#ffffff", "on-background": "#0b1c30", "on-secondary": "#ffffff", "surface": "#f8f9ff", "tertiary-fixed": "#b9eaff", "surface-variant": "#d3e4fe", "inverse-on-surface": "#eaf1ff", "on-error": "#ffffff", "background": "#f8f9ff", "on-primary-fixed-variant": "#3a4859", "surface-container-low": "#eff4ff", "primary-container": "#0f1c2c", "surface-container-high": "#dce9ff", "outline-variant": "#c4c6cc", "primary-fixed-dim": "#bac8dc", "secondary-fixed": "#ffddb8", "on-secondary-container": "#684000", "on-primary-fixed": "#0f1c2c", "on-surface-variant": "#44474c", "on-tertiary-fixed": "#001f29", "primary-fixed": "#d6e4f9", "error-container": "#ffdad6", "secondary-fixed-dim": "#ffb95f", "primary": "#000000", "outline": "#74777d" }, "borderRadius": { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" }, "spacing": { "gutter": "1.5rem", "space-xs": "0.25rem", "space-sm": "0.5rem", "margin": "2rem", "space-lg": "1.5rem", "space-md": "1rem", "space-xl": "2.5rem" }, "fontFamily": { "body-lg": [ "Plus Jakarta Sans" ], "label-sm": [ "Plus Jakarta Sans" ], "body-sm": [ "Plus Jakarta Sans" ], "headline-sm": [ "Plus Jakarta Sans" ], "label-lg": [ "Plus Jakarta Sans" ], "headline-md": [ "Plus Jakarta Sans" ], "body-md": [ "Plus Jakarta Sans" ], "label-md": [ "Plus Jakarta Sans" ], "headline-xxl": [ "Plus Jakarta Sans" ], "headline-xl-mobile": [ "Plus Jakarta Sans" ], "headline-xxl-mobile": [ "Plus Jakarta Sans" ], "headline-xl": [ "Plus Jakarta Sans" ], "headline-lg": [ "Plus Jakarta Sans" ] }, "fontSize": { "body-lg": [ "18px", { "lineHeight": "28px", "fontWeight": "400" } ], "label-sm": [ "11px", { "lineHeight": "14px", "fontWeight": "700" } ], "body-sm": [ "13px", { "lineHeight": "18px", "fontWeight": "400" } ], "headline-sm": [ "18px", { "lineHeight": "24px", "fontWeight": "600" } ], "label-lg": [ "14px", { "lineHeight": "20px", "fontWeight": "600" } ], "headline-md": [ "22px", { "lineHeight": "28px", "fontWeight": "600" } ], "body-md": [ "15px", { "lineHeight": "22px", "fontWeight": "400" } ], "label-md": [ "12px", { "lineHeight": "16px", "fontWeight": "600" } ], "headline-xxl": [ "48px", { "lineHeight": "56px", "fontWeight": "800" } ], "headline-xl-mobile": [ "26px", { "lineHeight": "34px", "fontWeight": "700" } ], "headline-xxl-mobile": [ "32px", { "lineHeight": "40px", "fontWeight": "800" } ], "headline-xl": [ "36px", { "lineHeight": "44px", "fontWeight": "700" } ], "headline-lg": [ "28px", { "lineHeight": "36px", "fontWeight": "700" } ] } } } };</script>
<script>
  function calculatePrice() {
    var paperPrice = parseFloat(document.getElementById('paperType').value) || 225;
    var printMultiplier = parseFloat(document.getElementById('printMode').value) || 1;
    var bindingCost = parseFloat(document.getElementById('bindingType').value) || 35000;
    var pages = parseInt(document.getElementById('pageCount').value) || 0;

    if (pages < 1) pages = 1;

    var printingSubtotal = (paperPrice * printMultiplier) * pages;
    var total = Math.round(printingSubtotal + bindingCost);

    var formatted = new Intl.NumberFormat('id-ID', {
      style: 'currency',
      currency: 'IDR',
      maximumFractionDigits: 0
    }).format(total);

    var displayEl = document.getElementById('priceDisplay');
    if (displayEl) {
      displayEl.textContent = formatted.replace('Rp', 'Rp ');
    }
  }
</script>
<?php get_footer(); ?>