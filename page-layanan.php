<?php get_header(); ?>
<main class="w-full pt-20 bg-surface min-h-[calc(100vh-20rem)]"><div class="flex flex-col w-full">
<!-- Category Filter Bar (navbar style, dark navy) -->
<section class="w-full bg-primary-container">
<div class="max-w-[1240px] mx-auto px-margin">
<div class="flex items-center md:justify-center gap-1 md:gap-space-md overflow-x-auto" id="categoryFilterContainer">
<button class="category-btn whitespace-nowrap px-4 md:px-5 py-4 border-b-2 font-label-lg text-label-lg font-semibold transition-colors active text-amber-400 border-amber-400" data-filter="all">
            Semua Layanan
          </button>
<button class="category-btn whitespace-nowrap px-4 md:px-5 py-4 border-b-2 font-label-lg text-label-lg font-semibold transition-colors text-white/80 border-transparent hover:text-white" data-filter="akademik">
            Dokumen Akademik
          </button>
<button class="category-btn whitespace-nowrap px-4 md:px-5 py-4 border-b-2 font-label-lg text-label-lg font-semibold transition-colors text-white/80 border-transparent hover:text-white" data-filter="promosi">
            Promosi &amp; Event
          </button>
<button class="category-btn whitespace-nowrap px-4 md:px-5 py-4 border-b-2 font-label-lg text-label-lg font-semibold transition-colors text-white/80 border-transparent hover:text-white" data-filter="merchandise">
            Merchandise
          </button>
<button class="category-btn whitespace-nowrap px-4 md:px-5 py-4 border-b-2 font-label-lg text-label-lg font-semibold transition-colors text-white/80 border-transparent hover:text-white" data-filter="banner">
            Large Format Banner
          </button>
</div>
</div>
</section>
<section class="w-full bg-surface pt-space-lg pb-space-sm">
<div class="max-w-[1240px] mx-auto px-margin">
<div class="flex items-center gap-space-xs text-on-surface-variant font-label-md text-label-md">
<span class="w-2 h-2 rounded-full bg-secondary-container animate-pulse"></span>
          Menampilkan <span class="font-bold text-on-surface" id="itemCount">6</span> Solusi Cetak Pilihan
        </div>
</div>
</section>
<!-- Service Cards Grid -->
<section class="w-full bg-surface pb-space-xl">
<div class="max-w-[1240px] mx-auto px-margin">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter" id="servicesGrid">
<!-- Card 1: Skripsi & Tesis -->
<article class="service-item bg-surface-container-lowest rounded-xl shadow-[0_4px_16px_-2px_rgba(13,27,42,0.05)] hover:shadow-[0_16px_28px_-4px_rgba(13,27,42,0.1)] transition-all transform hover:-translate-y-1 flex flex-col justify-between overflow-hidden group" data-category="akademik">
<div class="relative h-52 w-full overflow-hidden bg-surface-container">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A clean academic thesis book with dark blue velvet hardcover, gold foil embossed university logo, neatly placed on a minimalist architectural wooden desk under natural bright morning sunlight." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAb3ahEzEGnT976M1skTVZ1IP3TTgVShwESWcVXkIPYj5VULnn4Vqh0sexTSbiq7M31mzhcR94mk-lAq7gRcJzBFNOlC7UB05-qze3CHdGPUA3ZhM3GwaNsI9kyMJ-rYANlNY5QQ_gnGrNTHvvWvBiy8O1hBzpu9ADJw4xkT4cggeeMpd5iiY6FfWXXF0ewR9-G3CKEdgWHZo2qfcM_OA4UpE2jlhx8XSZ4FGmCPTY">
<div class="absolute top-space-sm left-space-sm">
<span class="inline-flex items-center gap-1 bg-surface-container-lowest/95 backdrop-blur-md px-space-sm py-1 rounded-md text-on-surface font-label-sm text-label-sm shadow-sm">
<span class="material-symbols-outlined text-secondary text-[14px]">local_fire_department</span>
                Paket Kilat 3 Jam
              </span>
</div>
<div class="absolute bottom-space-sm right-space-sm bg-primary text-on-primary px-space-sm py-1 rounded font-label-sm text-label-sm">
              Mulai Rp 35.000 / buku
            </div>
</div>
<div class="p-space-lg flex-1 flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">Kategori Akademik</span>
<span class="material-symbols-outlined text-outline-variant text-[20px]">auto_stories</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-space-xs">Cetak Skripsi &amp; Tesis Hardcover</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                Pilihan hardcover beludru atau linen bertekstur, tinta emas hotprint tajam, pita pembatas pembaca, dan ornamen sudut siku pelindung kuningan anti-terlipat.
              </p>
<div class="space-y-space-xs mb-space-md">
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary-container text-[16px]">check_circle</span>
<span class="">Kertas HVS 70g / 80g &amp; Bookpaper 72g</span>
</div>
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary-container text-[16px]">check_circle</span>
<span class="">Hotprint Emas / Perak Tahan Gores</span>
</div>
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary-container text-[16px]">check_circle</span>
<span class="">Siku Emas + Pita Pembatas Warna Bebas</span>
</div>
</div>
</div>
<div class="pt-space-md flex items-center justify-between">
<div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Estimasi Pengerjaan</span>
<p class="font-label-md text-label-md text-on-surface">3 Jam - 24 Jam</p>
</div>
<a class="inline-flex items-center gap-space-xs px-space-md py-space-sm rounded-lg bg-secondary-container text-on-secondary-fixed hover:bg-secondary-fixed-dim font-label-md text-label-md transition-colors shadow-sm" href="https://wa.me/6281234567890?text=Halo%20printno.id,%20saya%20ingin%20pesan%20Cetak%20Skripsi%20%26%20Tesis%20Hardcover" target="_blank" rel="noopener noreferrer"><span class="material-symbols-outlined text-[16px]">chat</span><span class="">Pesan via WhatsApp</span></a>
</div>
</div>
</article>
<!-- Card 2: Makalah & Jurnal -->
<article class="service-item bg-surface-container-lowest rounded-xl shadow-[0_4px_16px_-2px_rgba(13,27,42,0.05)] hover:shadow-[0_16px_28px_-4px_rgba(13,27,42,0.1)] transition-all transform hover:-translate-y-1 flex flex-col justify-between overflow-hidden group" data-category="akademik">
<div class="relative h-52 w-full overflow-hidden bg-surface-container">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A stack of neatly printed academic journal reports and term papers with black spine tape and transparent protective PVC cover on a clean white study table." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB172a_YaUttDf7idd6yx3LovCRSVTyYT9SLdL4NwAvvKXGW5B5944R4-tAY2BhEYdoQj5lA4uv37B9eDNXUmrwXzCTok7T7Ql_hhMl5gUp4QYX6sxErNDItQ7PoqbDhfol6byz_HM7w9_--LxxJkNcC51vS_JyWJKzioIbWAI9QB6Tsz5ytSizW--2ACAz43Pd31PnVd6M7hlKgbHd9biuZoySf9oqegwCa1MUycA">
<div class="absolute top-space-sm left-space-sm">
<span class="inline-flex items-center gap-1 bg-surface-container-lowest/95 backdrop-blur-md px-space-sm py-1 rounded-md text-on-surface font-label-sm text-label-sm shadow-sm">
<span class="material-symbols-outlined text-on-surface text-[14px]">bolt</span>
                Cepat 15 Menit
              </span>
</div>
<div class="absolute bottom-space-sm right-space-sm bg-primary text-on-primary px-space-sm py-1 rounded font-label-sm text-label-sm">
              Mulai Rp 150 / lembar
            </div>
</div>
<div class="p-space-lg flex-1 flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">Kategori Akademik</span>
<span class="material-symbols-outlined text-outline-variant text-[20px]">description</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-space-xs">Cetak Makalah, Laporan &amp; Jurnal</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                Pilihan jilid lakban cover mika bening/warna, jilid spiral kawat kokoh, atau hekter tengah rapi untuk laporan mingguan dan tugas kelompok kuliah.
              </p>
<div class="space-y-space-xs mb-space-md">
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary-container text-[16px]">check_circle</span>
<span class="">Jilid Lakban, Spiral Kawat, atau Softcover</span>
</div>
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary-container text-[16px]">check_circle</span>
<span class="">Cetak Hitam Putih Pekat / Warna Akurat</span>
</div>
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary-container text-[16px]">check_circle</span>
<span class="">Cover Mika Bening &amp; Buffalo Karton 230g</span>
</div>
</div>
</div>
<div class="pt-space-md flex items-center justify-between">
<div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Estimasi Pengerjaan</span>
<p class="font-label-md text-label-md text-on-surface">15 Menit - 1 Jam</p>
</div>
<a class="inline-flex items-center gap-space-xs px-space-md py-space-sm rounded-lg bg-secondary-container text-on-secondary-fixed hover:bg-secondary-fixed-dim font-label-md text-label-md transition-colors shadow-sm" href="https://wa.me/6281234567890?text=Halo%20printno.id,%20saya%20ingin%20pesan%20Cetak%20Makalah,%20Laporan%20%26%20Jurnal" target="_blank" rel="noopener noreferrer"><span class="material-symbols-outlined text-[16px]">chat</span><span class="">Pesan via WhatsApp</span></a>
</div>
</div>
</article>
<!-- Card 3: Poster Riset & Infografis -->
<article class="service-item bg-surface-container-lowest rounded-xl shadow-[0_4px_16px_-2px_rgba(13,27,42,0.05)] hover:shadow-[0_16px_28px_-4px_rgba(13,27,42,0.1)] transition-all transform hover:-translate-y-1 flex flex-col justify-between overflow-hidden group" data-category="akademik">
<div class="relative h-52 w-full overflow-hidden bg-surface-container">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A large scientific research conference poster mounted on an exhibition stand at a modern academic symposium, high resolution charts and crisp typography." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdw_GhWPvbhrWTXqQv4ycqZpjXlq11nVzMXw_e1xtbfkuZ6MPeP_PRmwwdKwGzs3_mtA0O-XDqvtryzJarXdyQpXlLgqei-zo__sZPxWrI2ddJ3ERW2xu0t_jWAAN1VZING7rexVB2GIFmrA_rvAiFXtC6rRviIj_MzG9o0zEUF1T0fNXNI6sumVcpmYvDDuUbFIQMokKr7gwqHeDiIxS7ULaG_3yifX_3Rc8_R7A">
<div class="absolute top-space-sm left-space-sm">
<span class="inline-flex items-center gap-1 bg-surface-container-lowest/95 backdrop-blur-md px-space-sm py-1 rounded-md text-on-surface font-label-sm text-label-sm shadow-sm">
<span class="material-symbols-outlined text-secondary text-[14px]">photo_size_select_actual</span>
                Anti Silau &amp; Presisi
              </span>
</div>
<div class="absolute bottom-space-sm right-space-sm bg-primary text-on-primary px-space-sm py-1 rounded font-label-sm text-label-sm">
              Mulai Rp 25.000 / lbr
            </div>
</div>
<div class="p-space-lg flex-1 flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">Kategori Akademik</span>
<span class="material-symbols-outlined text-outline-variant text-[20px]">science</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-space-xs">Poster Riset &amp; Infografis A1 / A2</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                Media Albatross dan Luster berstandar internasional tanpa pantulan lampu seminar, rendering teks font 8pt tetap tajam dan terbaca jelas oleh dewan juri.
              </p>
<div class="space-y-space-xs mb-space-md">
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary-container text-[16px]">check_circle</span>
<span class="">Bahan Albatross Matte (Anti Glare / Pantul)</span>
</div>
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary-container text-[16px]">check_circle</span>
<span class="">Art Paper 260g &amp; Photo Paper Luster</span>
</div>
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary-container text-[16px]">check_circle</span>
<span class="">Bonus Selongsong Karton Pelindung Tabung</span>
</div>
</div>
</div>
<div class="pt-space-md flex items-center justify-between">
<div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Estimasi Pengerjaan</span>
<p class="font-label-md text-label-md text-on-surface">1 Jam - 4 Jam</p>
</div>
<a class="inline-flex items-center gap-space-xs px-space-md py-space-sm rounded-lg bg-secondary-container text-on-secondary-fixed hover:bg-secondary-fixed-dim font-label-md text-label-md transition-colors shadow-sm" href="https://wa.me/6281234567890?text=Halo%20printno.id,%20saya%20ingin%20pesan%20Poster%20Riset%20%26%20Infografis%20A1/A2" target="_blank" rel="noopener noreferrer"><span class="material-symbols-outlined text-[16px]">chat</span><span class="">Pesan via WhatsApp</span></a>
</div>
</div>
</article>
<!-- Card 4: Banner & Spanduk -->
<article class="service-item bg-surface-container-lowest rounded-xl shadow-[0_4px_16px_-2px_rgba(13,27,42,0.05)] hover:shadow-[0_16px_28px_-4px_rgba(13,27,42,0.1)] transition-all transform hover:-translate-y-1 flex flex-col justify-between overflow-hidden group" data-category="banner">
<div class="relative h-52 w-full overflow-hidden bg-surface-container">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="An indoor campus festival hall with vivid roll-up banners and sturdy X-banners displaying student organization logos and bright typography." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDFbCO-rWv-OMt-4RFUYH9JAh3Cp_GtSTF9mRZAT-kXIMe8MRBm1EAuCu7tpjrhtY7Sj1UsofA9dFC-79kS6id9BRSOzhZys-SKV4GCRxMzCnZfCfAcfRtiz1Gme6osmacmAsNhlkM1DR5RhtkSZWMokuLK3QxCWCiurnkNa176uwVg6UyhaK41IL5qHRjU4OOyM6M1J063xT7VcmUPY3Sh2ORF8yP-sq6fmtLErjQ">
<div class="absolute top-space-sm left-space-sm">
<span class="inline-flex items-center gap-1 bg-surface-container-lowest/95 backdrop-blur-md px-space-sm py-1 rounded-md text-on-surface font-label-sm text-label-sm shadow-sm">
<span class="material-symbols-outlined text-secondary text-[14px]">flag</span>
                Tahan Cuaca &amp; Awet
              </span>
</div>
<div class="absolute bottom-space-sm right-space-sm bg-primary text-on-primary px-space-sm py-1 rounded font-label-sm text-label-sm">
              Mulai Rp 18.000 / m²
            </div>
</div>
<div class="p-space-lg flex-1 flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">Large Format Banner</span>
<span class="material-symbols-outlined text-outline-variant text-[20px]">aspect_ratio</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-space-xs">Banner &amp; Spanduk Acara Kampus</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                Spanduk panggung ormawa Flexi Korea 440g tahan hujan &amp; matahari, serta paket X-Banner dan Roll-up Banner kokoh dengan kaki aluminium tebal.
              </p>
<div class="space-y-space-xs mb-space-md">
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary-container text-[16px]">check_circle</span>
<span class="">Flexi Frontlite 280g, 340g &amp; Korea 440g</span>
</div>
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary-container text-[16px]">check_circle</span>
<span class="">Finishing Ring Mata Ayam / Selongsong Kayu</span>
</div>
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary-container text-[16px]">check_circle</span>
<span class="">Termasuk Tas Kanvas Portable (Paket Standing)</span>
</div>
</div>
</div>
<div class="pt-space-md flex items-center justify-between">
<div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Estimasi Pengerjaan</span>
<p class="font-label-md text-label-md text-on-surface">2 Jam - 6 Jam</p>
</div>
<a class="inline-flex items-center gap-space-xs px-space-md py-space-sm rounded-lg bg-secondary-container text-on-secondary-fixed hover:bg-secondary-fixed-dim font-label-md text-label-md transition-colors shadow-sm" href="https://wa.me/6281234567890?text=Halo%20printno.id,%20saya%20ingin%20pesan%20Banner%20%26%20Spanduk%20Acara%20Kampus" target="_blank" rel="noopener noreferrer"><span class="material-symbols-outlined text-[16px]">chat</span><span class="">Pesan via WhatsApp</span></a>
</div>
</div>
</article>
<!-- Card 5: Sertifikat Seminar & Piagam -->
<article class="service-item bg-surface-container-lowest rounded-xl shadow-[0_4px_16px_-2px_rgba(13,27,42,0.05)] hover:shadow-[0_16px_28px_-4px_rgba(13,27,42,0.1)] transition-all transform hover:-translate-y-1 flex flex-col justify-between overflow-hidden group" data-category="promosi">
<div class="relative h-52 w-full overflow-hidden bg-surface-container">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="An elegant graduation certificate and symposium award paper printed on textured off-white linen paper with golden hotprint foil borders and clear university seal." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA2RP4sTmPn1qk6cZMbR2Ai39rqkgx2X_x2aXoPYe55KLGo93_Cu_S7HPdX1jYftfaGx88mm5CJ9WPa5cklIBY2OMcw1LgnJYGQQNDRE0rKJRrTgRFMDHjfxcmZtnhIJgarHfsHjUdPXgCNMFQy5GxQAltCfNYXtqFafgrT27SAIk9YCD0qXA8HPEgASUYIaG5o-1Jnt1fP6BU9YAx9LC7qyz1dubofOLc8yhaOyaE">
<div class="absolute top-space-sm left-space-sm">
<span class="inline-flex items-center gap-1 bg-surface-container-lowest/95 backdrop-blur-md px-space-sm py-1 rounded-md text-on-surface font-label-sm text-label-sm shadow-sm">
<span class="material-symbols-outlined text-secondary text-[14px]">military_tech</span>
                Kertas Tekstur Mewah
              </span>
</div>
<div class="absolute bottom-space-sm right-space-sm bg-primary text-on-primary px-space-sm py-1 rounded font-label-sm text-label-sm">
              Mulai Rp 2.500 / lbr
            </div>
</div>
<div class="p-space-lg flex-1 flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">Promosi &amp; Event</span>
<span class="material-symbols-outlined text-outline-variant text-[20px]">workspace_premium</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-space-xs">Sertifikat Seminar &amp; Piagam Lomba</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                Kertas eksklusif Linen Jepang, Concorde, dan Jasmine berglitter halus. Tersedia opsi penomoran barcode unik dan hotprint logo keemasan.
              </p>
<div class="space-y-space-xs mb-space-md">
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary-container text-[16px]">check_circle</span>
<span class="">Kertas Linen, Concorde &amp; Jasmine 220-250g</span>
</div>
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary-container text-[16px]">check_circle</span>
<span class="">Variable Data Printing (Input Nama Otomatis)</span>
</div>
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary-container text-[16px]">check_circle</span>
<span class="">Aksen Hotprint Foil Emas / Emboss Timbul</span>
</div>
</div>
</div>
<div class="pt-space-md flex items-center justify-between">
<div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Estimasi Pengerjaan</span>
<p class="font-label-md text-label-md text-on-surface">30 Menit - 2 Jam</p>
</div>
<a class="inline-flex items-center gap-space-xs px-space-md py-space-sm rounded-lg bg-secondary-container text-on-secondary-fixed hover:bg-secondary-fixed-dim font-label-md text-label-md transition-colors shadow-sm" href="https://wa.me/6281234567890?text=Halo%20printno.id,%20saya%20ingin%20pesan%20Sertifikat%20Seminar%20%26%20Piagam%20Lomba" target="_blank" rel="noopener noreferrer"><span class="material-symbols-outlined text-[16px]">chat</span><span class="">Pesan via WhatsApp</span></a>
</div>
</div>
</article>
<!-- Card 6: Stiker & Merchandise Komunitas -->
<article class="service-item bg-surface-container-lowest rounded-xl shadow-[0_4px_16px_-2px_rgba(13,27,42,0.05)] hover:shadow-[0_16px_28px_-4px_rgba(13,27,42,0.1)] transition-all transform hover:-translate-y-1 flex flex-col justify-between overflow-hidden group" data-category="merchandise">
<div class="relative h-52 w-full overflow-hidden bg-surface-container">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Assorted custom die-cut vinyl stickers, round pin badges, and PVC student ID lanyard cards arranged stylishly on an industrial concrete background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA3A-StERfInX2b0YMrCqQR_79g6p3ivyk5M2vGTCL3U_jWQhvK9zjb6WKubBeLitCVY1n8RTTnggcI1bRDvyIkZPLgENB8dd3I5n-YRgGsCkSAMjB13_x6AIgmDa27dJ2RaKrYJ_L0o1_ze_zwUf2fxodk8BSJfz8Hy7BcWQEiCTUZTpIvWMl4MvkQkUFIZM-QD34mLOWabi_cVIQWtC1SebfzyD6B4HrGUn08LNc">
<div class="absolute top-space-sm left-space-sm">
<span class="inline-flex items-center gap-1 bg-surface-container-lowest/95 backdrop-blur-md px-space-sm py-1 rounded-md text-on-surface font-label-sm text-label-sm shadow-sm">
<span class="material-symbols-outlined text-secondary text-[14px]">category</span>
                Kiss Cut &amp; Die Cut
              </span>
</div>
<div class="absolute bottom-space-sm right-space-sm bg-primary text-on-primary px-space-sm py-1 rounded font-label-sm text-label-sm">
              Mulai Rp 10.000 / A3+
            </div>
</div>
<div class="p-space-lg flex-1 flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">Merchandise</span>
<span class="material-symbols-outlined text-outline-variant text-[20px]">badge</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-space-xs">Stiker &amp; Merchandise Ormawa</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                Stiker Vinyl tahan air dan laminasi doff/glossy, pin peniti panitia, kartu ID Card panitia tebal PVC, dan lanyard printing double-side presisi.
              </p>
<div class="space-y-space-xs mb-space-md">
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary-container text-[16px]">check_circle</span>
<span class="">Bahan Vinyl Sintetis Anti Robek &amp; Anti Air</span>
</div>
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary-container text-[16px]">check_circle</span>
<span class="">Potong Mesin Presisi Kiss Cut / Die Cut Lepas</span>
</div>
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary-container text-[16px]">check_circle</span>
<span class="">ID Card Standar ATM + Tali Sablon/Printing</span>
</div>
</div>
</div>
<div class="pt-space-md flex items-center justify-between">
<div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Estimasi Pengerjaan</span>
<p class="font-label-md text-label-md text-on-surface">1 Hari Kerja</p>
</div>
<a class="inline-flex items-center gap-space-xs px-space-md py-space-sm rounded-lg bg-secondary-container text-on-secondary-fixed hover:bg-secondary-fixed-dim font-label-md text-label-md transition-colors shadow-sm" href="https://wa.me/6281234567890?text=Halo%20printno.id,%20saya%20ingin%20pesan%20Stiker%20%26%20Merchandise%20Ormawa" target="_blank" rel="noopener noreferrer"><span class="material-symbols-outlined text-[16px]">chat</span><span class="">Pesan via WhatsApp</span></a>
</div>
</div>
</article>
</div>
</div>
</section>
<!-- Interactive Price Calculator Preview / Simulasi Estimasi Biaya Cetak -->

<!-- Process & Workflow Showcase (Tactile Minimalism) -->
<section class="w-full bg-surface py-space-xl">
<div class="max-w-[1240px] mx-auto px-margin">
<div class="text-center max-w-2xl mx-auto mb-space-xl">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">Alur Kerja Cepat</span>
<h2 class="font-headline-lg text-headline-lg text-on-surface mt-space-xs mb-space-sm">Bagaimana Kami Memproses Berkas Anda</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Dari berkas digital di laptop Anda hingga siap dibawa ke ruang sidang dalam hitungan jam.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-4 gap-space-md relative">
<div class="bg-surface-container-lowest border border-outline-variant/40 p-space-lg rounded-xl flex flex-col justify-between items-center text-center">
<div class="flex flex-col items-center">
<div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-on-surface font-headline-sm text-headline-sm mb-space-md">1</div>
<h3 class="font-label-lg text-label-lg text-on-surface mb-space-xs">Upload File PDF</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Unggah dokumen siap cetak melalui web atau kirim via WhatsApp bot kampus.</p>
</div>
<div class="pt-space-md flex items-center justify-center gap-1 text-on-surface-variant font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px]">file_open</span> Format PDF / Word
          </div>
</div>
<div class="bg-surface-container-lowest border border-outline-variant/40 p-space-lg rounded-xl flex flex-col justify-between items-center text-center">
<div class="flex flex-col items-center">
<div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-on-surface font-headline-sm text-headline-sm mb-space-md">2</div>
<h3 class="font-label-lg text-label-lg text-on-surface mb-space-xs">Pengecekan Margin</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Operator spesialis kami memeriksa margin jilid 4-4-3-3 agar tidak terpotong saat direkatkan.</p>
</div>
<div class="pt-space-md flex items-center justify-center gap-1 text-on-surface-variant font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px]">rule</span> Quality Control 1
          </div>
</div>
<div class="bg-surface-container-lowest border border-outline-variant/40 p-space-lg rounded-xl flex flex-col justify-between items-center text-center">
<div class="flex flex-col items-center">
<div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-on-surface font-headline-sm text-headline-sm mb-space-md">3</div>
<h3 class="font-label-lg text-label-lg text-on-surface mb-space-xs">Cetak Laser &amp; Jilid</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Dicetak dengan mesin produksi digital Fuji Xerox berkecepatan tinggi dengan tinta waterproof.</p>
</div>
<div class="pt-space-md flex items-center justify-center gap-1 text-on-surface-variant font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px]">precision_manufacturing</span> Finishing Presisi
          </div>
</div>
<div class="bg-surface-container-lowest border border-outline-variant/40 p-space-lg rounded-xl flex flex-col justify-between items-center text-center">
<div class="flex flex-col items-center">
<div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-on-surface font-headline-sm text-headline-sm mb-space-md">4</div>
<h3 class="font-label-lg text-label-lg text-on-surface mb-space-xs">Pickup / Antar Kilat</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Ambil mandiri di locker station kampus terdekat atau kurir kilat antar ke fakultas Anda.</p>
</div>
<div class="pt-space-md flex items-center justify-center gap-1 text-on-surface-variant font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px]">moped</span> Siap Ambil / Kirim
          </div>
</div>
</div>
</div>
</section>
</div>
<script>
  // Simple interactive category filtering & calculation script
  (function initServicesPage() {
    // Category tabs logic
    const filterBtns = document.querySelectorAll('.category-btn');
    const serviceItems = document.querySelectorAll('.service-item');
    const itemCountEl = document.getElementById('itemCount');

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => {
          b.classList.remove('active', 'text-amber-400', 'border-amber-400');
          b.classList.add('text-white/80', 'border-transparent', 'hover:text-white');
        });

        btn.classList.add('active', 'text-amber-400', 'border-amber-400');
        btn.classList.remove('text-white/80', 'border-transparent', 'hover:text-white');

        const filter = btn.getAttribute('data-filter');
        let visibleCount = 0;

        serviceItems.forEach(item => {
          const cat = item.getAttribute('data-category');
          if (filter === 'all' || cat === filter) {
            item.style.display = 'flex';
            visibleCount++;
          } else {
            item.style.display = 'none';
          }
        });

        if (itemCountEl) itemCountEl.textContent = visibleCount;
      });
    });

    // Calculator Interactive Logic
    const pageCountInput = document.getElementById('pageCountInput');
    const pageRange = document.getElementById('pageRange');
    const colorMode = document.getElementById('colorMode');
    const paperType = document.getElementById('paperType');
    const copiesCountEl = document.getElementById('copiesCount');
    const decCopies = document.getElementById('decCopies');
    const incCopies = document.getElementById('incCopies');

    const summaryPages = document.getElementById('summaryPages');
    const summaryCopies = document.getElementById('summaryCopies');
    const summaryCopies2 = document.getElementById('summaryCopies2');
    const summaryPrintCost = document.getElementById('summaryPrintCost');
    const summaryBindingLabel = document.getElementById('summaryBindingLabel');
    const summaryBindingCost = document.getElementById('summaryBindingCost');
    const summaryDiscount = document.getElementById('summaryDiscount');
    const summaryGrandTotal = document.getElementById('summaryGrandTotal');

    let currentBinding = 'hardcover';
    let currentCopies = 3;

    function formatRupiah(num) {
      return 'Rp ' + Math.round(num).toLocaleString('id-ID');
    }

    function calculateTotal() {
      const pages = parseInt(pageCountInput.value) || 1;
      const copies = currentCopies;

      // Price per page formula
      let perPageBase = 200; // default HVS 80
      if (paperType.value === 'hvs70') perPageBase = 175;
      if (paperType.value === 'bookpaper') perPageBase = 250;

      let colorMultiplier = 1;
      if (colorMode.value === 'bw') colorMultiplier = 1;
      if (colorMode.value === 'mixed') colorMultiplier = 1.35;
      if (colorMode.value === 'color') colorMultiplier = 2.4;

      const printCostPerCopy = pages * (perPageBase * colorMultiplier);
      const totalPrintCost = printCostPerCopy * copies;

      // Binding cost per copy
      let bindingCostPerCopy = 35000;
      let bindingName = 'Hardcover Beludru';

      if (currentBinding === 'spiral') {
        bindingCostPerCopy = 15000;
        bindingName = 'Spiral Kawat';
      } else if (currentBinding === 'lakban') {
        bindingCostPerCopy = 6000;
        bindingName = 'Jilid Lakban Mika';
      } else if (currentBinding === 'tanpajilid') {
        bindingCostPerCopy = 0;
        bindingName = 'Tanpa Jilid';
      }

      const totalBindingCost = bindingCostPerCopy * copies;
      const subTotal = totalPrintCost + totalBindingCost;
      const discount = subTotal * 0.10; // 10% student promo
      const grandTotal = subTotal - discount;

      // Update DOM
      summaryPages.textContent = pages;
      summaryCopies.textContent = copies;
      summaryCopies2.textContent = copies;
      summaryBindingLabel.textContent = bindingName;

      summaryPrintCost.textContent = formatRupiah(totalPrintCost);
      summaryBindingCost.textContent = formatRupiah(totalBindingCost);
      summaryDiscount.textContent = '-' + formatRupiah(discount);
      summaryGrandTotal.textContent = formatRupiah(grandTotal);
    }

    if (pageCountInput && pageRange) {
      pageRange.addEventListener('input', (e) => {
        pageCountInput.value = e.target.value;
        calculateTotal();
      });

      pageCountInput.addEventListener('input', (e) => {
        pageRange.value = e.target.value;
        calculateTotal();
      });
    }

    if (colorMode) colorMode.addEventListener('change', calculateTotal);
    if (paperType) paperType.addEventListener('change', calculateTotal);

    if (decCopies && incCopies && copiesCountEl) {
      decCopies.addEventListener('click', () => {
        if (currentCopies > 1) {
          currentCopies--;
          copiesCountEl.textContent = currentCopies;
          calculateTotal();
        }
      });

      incCopies.addEventListener('click', () => {
        if (currentCopies < 50) {
          currentCopies++;
          copiesCountEl.textContent = currentCopies;
          calculateTotal();
        }
      });
    }

    // Binding buttons
    const bindingBtns = document.querySelectorAll('.binding-btn');
    bindingBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        bindingBtns.forEach(b => {
          b.classList.remove('active', 'bg-surface-container-high', 'text-on-surface');
          b.classList.add('bg-surface', 'text-on-surface-variant');
        });
        btn.classList.add('active', 'bg-surface-container-high', 'text-on-surface');
        btn.classList.remove('bg-surface', 'text-on-surface-variant');
        currentBinding = btn.getAttribute('data-binding');
        calculateTotal();
      });
    });

    // Preset helper from card click
    window.prefillCalculator = function(serviceType) {
      const calcSection = document.getElementById('kalkulator');
      if (calcSection) calcSection.scrollIntoView({ behavior: 'smooth' });

      if (serviceType === 'skripsi') {
        pageCountInput.value = 85;
        pageRange.value = 85;
        colorMode.value = 'mixed';
        paperType.value = 'hvs80';
        triggerBinding('hardcover');
      } else if (serviceType === 'makalah') {
        pageCountInput.value = 24;
        pageRange.value = 24;
        colorMode.value = 'bw';
        paperType.value = 'hvs70';
        triggerBinding('lakban');
      } else if (serviceType === 'poster') {
        pageCountInput.value = 1;
        pageRange.value = 1;
        colorMode.value = 'color';
        triggerBinding('tanpajilid');
      }
      calculateTotal();
    };

    function triggerBinding(bindingName) {
      bindingBtns.forEach(b => {
        if (b.getAttribute('data-binding') === bindingName) {
          b.click();
        }
      });
    }

    calculateTotal();
  })();
</script></main>
<script>tailwind.config = { darkMode: "class", theme: { extend: { "colors": { "tertiary-container": "#001f29", "on-surface": "#0b1c30", "tertiary-fixed-dim": "#81d1f0", "on-error-container": "#93000a", "inverse-primary": "#bac8dc", "on-tertiary": "#ffffff", "surface-container": "#e5eeff", "error": "#ba1a1a", "surface-dim": "#cbdbf5", "on-secondary-fixed": "#2a1700", "surface-container-highest": "#d3e4fe", "tertiary": "#000000", "on-primary-container": "#778598", "surface-container-lowest": "#ffffff", "secondary": "#855300", "surface-tint": "#525f71", "inverse-surface": "#213145", "surface-bright": "#f8f9ff", "on-tertiary-fixed-variant": "#004d62", "secondary-container": "#fea619", "on-secondary-fixed-variant": "#653e00", "on-tertiary-container": "#388eaa", "on-primary": "#ffffff", "on-background": "#0b1c30", "on-secondary": "#ffffff", "surface": "#f8f9ff", "tertiary-fixed": "#b9eaff", "surface-variant": "#d3e4fe", "inverse-on-surface": "#eaf1ff", "on-error": "#ffffff", "background": "#f8f9ff", "on-primary-fixed-variant": "#3a4859", "surface-container-low": "#eff4ff", "primary-container": "#0f1c2c", "surface-container-high": "#dce9ff", "outline-variant": "#c4c6cc", "primary-fixed-dim": "#bac8dc", "secondary-fixed": "#ffddb8", "on-secondary-container": "#684000", "on-primary-fixed": "#0f1c2c", "on-surface-variant": "#44474c", "on-tertiary-fixed": "#001f29", "primary-fixed": "#d6e4f9", "error-container": "#ffdad6", "secondary-fixed-dim": "#ffb95f", "primary": "#000000", "outline": "#74777d" }, "borderRadius": { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" }, "spacing": { "gutter": "1.5rem", "space-xs": "0.25rem", "space-sm": "0.5rem", "margin": "2rem", "space-lg": "1.5rem", "space-md": "1rem", "space-xl": "2.5rem" }, "fontFamily": { "body-lg": [ "Plus Jakarta Sans" ], "label-sm": [ "Plus Jakarta Sans" ], "body-sm": [ "Plus Jakarta Sans" ], "headline-sm": [ "Plus Jakarta Sans" ], "label-lg": [ "Plus Jakarta Sans" ], "headline-md": [ "Plus Jakarta Sans" ], "body-md": [ "Plus Jakarta Sans" ], "label-md": [ "Plus Jakarta Sans" ], "headline-xxl": [ "Plus Jakarta Sans" ], "headline-xl-mobile": [ "Plus Jakarta Sans" ], "headline-xxl-mobile": [ "Plus Jakarta Sans" ], "headline-xl": [ "Plus Jakarta Sans" ], "headline-lg": [ "Plus Jakarta Sans" ] }, "fontSize": { "body-lg": [ "18px", { "lineHeight": "28px", "fontWeight": "400" } ], "label-sm": [ "11px", { "lineHeight": "14px", "fontWeight": "700" } ], "body-sm": [ "13px", { "lineHeight": "18px", "fontWeight": "400" } ], "headline-sm": [ "18px", { "lineHeight": "24px", "fontWeight": "600" } ], "label-lg": [ "14px", { "lineHeight": "20px", "fontWeight": "600" } ], "headline-md": [ "22px", { "lineHeight": "28px", "fontWeight": "600" } ], "body-md": [ "15px", { "lineHeight": "22px", "fontWeight": "400" } ], "label-md": [ "12px", { "lineHeight": "16px", "fontWeight": "600" } ], "headline-xxl": [ "48px", { "lineHeight": "56px", "fontWeight": "800" } ], "headline-xl-mobile": [ "26px", { "lineHeight": "34px", "fontWeight": "700" } ], "headline-xxl-mobile": [ "32px", { "lineHeight": "40px", "fontWeight": "800" } ], "headline-xl": [ "36px", { "lineHeight": "44px", "fontWeight": "700" } ], "headline-lg": [ "28px", { "lineHeight": "36px", "fontWeight": "700" } ] } } } };</script>
<script>
  // Simple interactive category filtering & calculation script
  (function initServicesPage() {
    // Category tabs logic
    const filterBtns = document.querySelectorAll('.category-btn');
    const serviceItems = document.querySelectorAll('.service-item');
    const itemCountEl = document.getElementById('itemCount');

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => {
          b.classList.remove('active', 'text-amber-400', 'border-amber-400');
          b.classList.add('text-white/80', 'border-transparent', 'hover:text-white');
        });

        btn.classList.add('active', 'text-amber-400', 'border-amber-400');
        btn.classList.remove('text-white/80', 'border-transparent', 'hover:text-white');

        const filter = btn.getAttribute('data-filter');
        let visibleCount = 0;

        serviceItems.forEach(item => {
          const cat = item.getAttribute('data-category');
          if (filter === 'all' || cat === filter) {
            item.style.display = 'flex';
            visibleCount++;
          } else {
            item.style.display = 'none';
          }
        });

        if (itemCountEl) itemCountEl.textContent = visibleCount;
      });
    });

    // Calculator Interactive Logic
    const pageCountInput = document.getElementById('pageCountInput');
    const pageRange = document.getElementById('pageRange');
    const colorMode = document.getElementById('colorMode');
    const paperType = document.getElementById('paperType');
    const copiesCountEl = document.getElementById('copiesCount');
    const decCopies = document.getElementById('decCopies');
    const incCopies = document.getElementById('incCopies');

    const summaryPages = document.getElementById('summaryPages');
    const summaryCopies = document.getElementById('summaryCopies');
    const summaryCopies2 = document.getElementById('summaryCopies2');
    const summaryPrintCost = document.getElementById('summaryPrintCost');
    const summaryBindingLabel = document.getElementById('summaryBindingLabel');
    const summaryBindingCost = document.getElementById('summaryBindingCost');
    const summaryDiscount = document.getElementById('summaryDiscount');
    const summaryGrandTotal = document.getElementById('summaryGrandTotal');

    let currentBinding = 'hardcover';
    let currentCopies = 3;

    function formatRupiah(num) {
      return 'Rp ' + Math.round(num).toLocaleString('id-ID');
    }

    function calculateTotal() {
      const pages = parseInt(pageCountInput.value) || 1;
      const copies = currentCopies;

      // Price per page formula
      let perPageBase = 200; // default HVS 80
      if (paperType.value === 'hvs70') perPageBase = 175;
      if (paperType.value === 'bookpaper') perPageBase = 250;

      let colorMultiplier = 1;
      if (colorMode.value === 'bw') colorMultiplier = 1;
      if (colorMode.value === 'mixed') colorMultiplier = 1.35;
      if (colorMode.value === 'color') colorMultiplier = 2.4;

      const printCostPerCopy = pages * (perPageBase * colorMultiplier);
      const totalPrintCost = printCostPerCopy * copies;

      // Binding cost per copy
      let bindingCostPerCopy = 35000;
      let bindingName = 'Hardcover Beludru';

      if (currentBinding === 'spiral') {
        bindingCostPerCopy = 15000;
        bindingName = 'Spiral Kawat';
      } else if (currentBinding === 'lakban') {
        bindingCostPerCopy = 6000;
        bindingName = 'Jilid Lakban Mika';
      } else if (currentBinding === 'tanpajilid') {
        bindingCostPerCopy = 0;
        bindingName = 'Tanpa Jilid';
      }

      const totalBindingCost = bindingCostPerCopy * copies;
      const subTotal = totalPrintCost + totalBindingCost;
      const discount = subTotal * 0.10; // 10% student promo
      const grandTotal = subTotal - discount;

      // Update DOM
      summaryPages.textContent = pages;
      summaryCopies.textContent = copies;
      summaryCopies2.textContent = copies;
      summaryBindingLabel.textContent = bindingName;

      summaryPrintCost.textContent = formatRupiah(totalPrintCost);
      summaryBindingCost.textContent = formatRupiah(totalBindingCost);
      summaryDiscount.textContent = '-' + formatRupiah(discount);
      summaryGrandTotal.textContent = formatRupiah(grandTotal);
    }

    if (pageCountInput && pageRange) {
      pageRange.addEventListener('input', (e) => {
        pageCountInput.value = e.target.value;
        calculateTotal();
      });

      pageCountInput.addEventListener('input', (e) => {
        pageRange.value = e.target.value;
        calculateTotal();
      });
    }

    if (colorMode) colorMode.addEventListener('change', calculateTotal);
    if (paperType) paperType.addEventListener('change', calculateTotal);

    if (decCopies && incCopies && copiesCountEl) {
      decCopies.addEventListener('click', () => {
        if (currentCopies > 1) {
          currentCopies--;
          copiesCountEl.textContent = currentCopies;
          calculateTotal();
        }
      });

      incCopies.addEventListener('click', () => {
        if (currentCopies < 50) {
          currentCopies++;
          copiesCountEl.textContent = currentCopies;
          calculateTotal();
        }
      });
    }

    // Binding buttons
    const bindingBtns = document.querySelectorAll('.binding-btn');
    bindingBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        bindingBtns.forEach(b => {
          b.classList.remove('active', 'bg-surface-container-high', 'text-on-surface');
          b.classList.add('bg-surface', 'text-on-surface-variant');
        });
        btn.classList.add('active', 'bg-surface-container-high', 'text-on-surface');
        btn.classList.remove('bg-surface', 'text-on-surface-variant');
        currentBinding = btn.getAttribute('data-binding');
        calculateTotal();
      });
    });

    // Preset helper from card click
    window.prefillCalculator = function(serviceType) {
      const calcSection = document.getElementById('kalkulator');
      if (calcSection) calcSection.scrollIntoView({ behavior: 'smooth' });

      if (serviceType === 'skripsi') {
        pageCountInput.value = 85;
        pageRange.value = 85;
        colorMode.value = 'mixed';
        paperType.value = 'hvs80';
        triggerBinding('hardcover');
      } else if (serviceType === 'makalah') {
        pageCountInput.value = 24;
        pageRange.value = 24;
        colorMode.value = 'bw';
        paperType.value = 'hvs70';
        triggerBinding('lakban');
      } else if (serviceType === 'poster') {
        pageCountInput.value = 1;
        pageRange.value = 1;
        colorMode.value = 'color';
        triggerBinding('tanpajilid');
      }
      calculateTotal();
    };

    function triggerBinding(bindingName) {
      bindingBtns.forEach(b => {
        if (b.getAttribute('data-binding') === bindingName) {
          b.click();
        }
      });
    }

    calculateTotal();
  })();
</script>
<?php get_footer(); ?>