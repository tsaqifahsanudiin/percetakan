<!doctype html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body class="bg-surface font-body-md text-on-surface antialiased">
<?php wp_body_open(); ?>

<header class="fixed top-0 left-0 right-0 w-full z-50 bg-surface-container-lowest/90 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
  <div class="h-20 max-w-[1240px] mx-auto px-margin flex items-center justify-between gap-space-md">
    
    <!-- Logo & Brand Name -->
    <div class="flex items-center gap-space-md">
      <a class="flex items-center gap-2 group" href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/image/logo.png'); ?>" alt="printno.id logo" class="h-9 md:h-10 w-auto object-contain">
        <span class="font-headline-sm text-headline-sm font-bold tracking-tight text-on-surface group-hover:text-amber-500 transition-colors">
          printno.id
        </span>
      </a>
    </div>

    <!-- Navigation Menu (Desktop) -->
    <nav class="hidden md:flex items-center gap-space-lg font-label-lg text-label-lg">
      <a class="<?php echo is_front_page() ? 'bg-surface-variant text-on-primary-fixed font-bold' : 'text-on-surface-variant hover:text-secondary-container transition-colors font-medium'; ?> px-3.5 py-1.5 rounded-lg shadow-sm" href="<?php echo esc_url(home_url('/')); ?>">Beranda</a>
      <a class="<?php echo is_page('layanan') ? 'bg-surface-variant text-on-primary-fixed font-bold' : 'text-on-surface-variant hover:text-secondary-container transition-colors font-medium'; ?> px-2 py-1.5" href="<?php echo esc_url(home_url('/layanan/')); ?>">Layanan</a>
      <a class="<?php echo is_page('panduan') ? 'bg-surface-variant text-on-primary-fixed font-bold' : 'text-on-surface-variant hover:text-secondary-container transition-colors font-medium'; ?> px-2 py-1.5" href="<?php echo esc_url(home_url('/panduan/')); ?>">Pemesanan</a>
      <a class="<?php echo is_page('tentang-kami') || is_page('tentang') ? 'bg-surface-variant text-on-primary-fixed font-bold' : 'text-on-surface-variant hover:text-secondary-container transition-colors font-medium'; ?> px-2 py-1.5" href="<?php echo esc_url(home_url('/tentang-kami/')); ?>">Tentang</a>
      <a class="<?php echo is_page('kontak') ? 'bg-surface-variant text-on-primary-fixed font-bold' : 'text-on-surface-variant hover:text-secondary-container transition-colors font-medium'; ?> px-2 py-1.5" href="<?php echo esc_url(home_url('/kontak/')); ?>">Kontak</a>
    </nav>

    <!-- Tombol Kanan (CTA + Toggle Mobile Menu) -->
    <div class="flex items-center gap-3 md:hidden">
<!-- Tombol Hamburger Menu (Hanya Muncul di HP/Tablet) -->
      <button id="mobile-menu-btn" aria-label="Buka Menu" class="md:hidden p-2 text-on-surface hover:bg-surface-container rounded-lg focus:outline-none">
        <span class="material-symbols-outlined text-[28px]">menu</span>
      </button>
    </div>

  </div>

  <!-- Panel Dropdown Menu Mobile -->
  <div id="mobile-menu" class="hidden md:hidden bg-surface-container-lowest border-b border-outline-variant/20 px-6 py-4 flex flex-col gap-3">
    <a class="font-medium py-1.5 text-on-surface" href="<?php echo esc_url(home_url('/')); ?>">Beranda</a>
    <a class="font-medium py-1.5 text-on-surface" href="<?php echo esc_url(home_url('/layanan/')); ?>">Layanan</a>
    <a class="font-medium py-1.5 text-on-surface" href="<?php echo esc_url(home_url('/panduan/')); ?>">Pemesanan</a>
    <a class="font-medium py-1.5 text-on-surface" href="<?php echo esc_url(home_url('/tentang-kami/')); ?>">Tentang Kami</a>
    <a class="font-medium py-1.5 text-on-surface" href="<?php echo esc_url(home_url('/kontak/')); ?>">Kontak</a>
  </div>
</header>

<script>
  // Script Toggle Menu HP
  document.addEventListener('DOMContentLoaded', function() {
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    
    if (btn && menu) {
      btn.addEventListener('click', function() {
        menu.classList.toggle('hidden');
      });
    }
  });
</script>