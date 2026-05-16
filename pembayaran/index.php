<?php
// ============================================================
// GANTI nomor WhatsApp dan telepon admin di sini:
$wa_phone   = '6281323638447';
$wa_message = urlencode('Halo Catering Yayubi, saya ingin mengirimkan bukti pembayaran saya.');
$wa_link    = "https://wa.me/{$wa_phone}?text={$wa_message}";
$call_link  = "tel:+{$wa_phone}";
// ============================================================
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Loading Pembayaran &ndash; Catering Yayubi</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="page">
  <div class="outer-card">

    <div class="corner corner-tl">
      <svg viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="0" y="0" width="62" height="62" rx="8" fill="#F4895A" opacity="0.45"/>
        <rect x="68" y="0" width="36" height="36" rx="5" fill="#E8622A" opacity="0.75"/>
        <rect x="0" y="68" width="36" height="36" rx="5" fill="#E8622A" opacity="0.45"/>
        <path d="M110 68 L160 68 L160 0 Z" fill="#F4895A" opacity="0.30"/>
        <path d="M68 110 L68 160 L0 160 Z" fill="#F4895A" opacity="0.25"/>
      </svg>
    </div>
    <div class="corner corner-tr">
      <svg viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="98" y="0" width="62" height="62" rx="8" fill="#F4895A" opacity="0.45"/>
        <rect x="56" y="0" width="36" height="36" rx="5" fill="#E8622A" opacity="0.75"/>
        <rect x="124" y="68" width="36" height="36" rx="5" fill="#E8622A" opacity="0.45"/>
        <path d="M50 68 L0 68 L0 0 Z" fill="#F4895A" opacity="0.30"/>
      </svg>
    </div>
    <div class="corner corner-bl">
      <svg viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="0" y="98" width="62" height="62" rx="8" fill="#F4895A" opacity="0.45"/>
        <rect x="68" y="124" width="36" height="36" rx="5" fill="#E8622A" opacity="0.65"/>
        <rect x="0" y="56" width="36" height="36" rx="5" fill="#E8622A" opacity="0.40"/>
        <path d="M68 90 L160 160 L0 160 Z" fill="#F4895A" opacity="0.22"/>
      </svg>
    </div>
    <div class="corner corner-br">
      <svg viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="98" y="98" width="62" height="62" rx="8" fill="#F4895A" opacity="0.45"/>
        <rect x="56" y="124" width="36" height="36" rx="5" fill="#E8622A" opacity="0.65"/>
        <rect x="124" y="56" width="36" height="36" rx="5" fill="#E8622A" opacity="0.40"/>
        <path d="M90 90 L0 160 L160 160 Z" fill="#F4895A" opacity="0.22"/>
        <path d="M160 100 A60 60 0 0 1 100 160 L160 160 Z" fill="#F5C4B3" opacity="0.40"/>
      </svg>
    </div>

    <div class="blob"></div>

    <div class="inner-card" id="innerCard">

      <!-- STATE 1: Spinner -->
      <div class="state active" id="stateLoading">
        <p class="state-title">Pesanan Sedang Diproses</p>
        <p class="state-sub">Tunggu sebentar</p>
        <div class="spinner"></div>
      </div>

      <!-- STATE 2: Check icon -->
      <div class="state" id="stateProcess">
        <p class="state-title">Pesanan Sedang Diproses</p>
        <p class="state-sub">Tunggu sebentar</p>
        <svg class="check-svg" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="29" cy="29" r="26" stroke="#E8622A" stroke-width="2.5"/>
          <polyline points="17,30 26,39 42,21" stroke="#E8622A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>

      <!-- STATE 3: Sukses -->
      <div class="state" id="stateSuccess">
        <p class="state-title">Pesanan Telah Berhasil</p>
        <div class="logo-wrap">
          <div class="logo-inner">
            <img src="logo.jpeg" alt="Logo Yayubi"/>
          </div>
        </div>
        <p class="info-text">Kirim bukti pesanan yang telah kamu screenshoot</p>
        <a class="btn-wa" href="<?= $wa_link ?>" target="_blank" rel="noopener">
          <svg class="btn-icon" viewBox="0 0 24 24" fill="currentColor">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
            <path d="M12 0C5.373 0 0 5.373 0 12c0 2.132.558 4.13 1.532 5.864L.057 23.943a.5.5 0 0 0 .61.61l6.079-1.475A11.952 11.952 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.832 9.832 0 0 1-5.034-1.382l-.36-.215-3.737.907.924-3.637-.235-.374A9.832 9.832 0 0 1 2.182 12C2.182 6.57 6.57 2.182 12 2.182S21.818 6.57 21.818 12 17.43 21.818 12 21.818z"/>
          </svg>
          Pesan via WhatsApp
        </a>
        <a class="btn-call" href="<?= $call_link ?>">
          <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="#E8622A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.18h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.77a16 16 0 0 0 6.29 6.29l.95-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
          </svg>
          <span>
            <span class="call-label">Telepon Kami</span>
            &nbsp;<span class="call-sub">Direct Call</span>
          </span>
        </a>
      </div>

    </div>
  </div>
</div>

<script src="script.js"></script>
</body>
</html>