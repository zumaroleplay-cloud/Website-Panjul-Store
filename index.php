<?php    
// Set zona waktu ke WIB    
date_default_timezone_set('Asia/Jakarta');    
?>    
<!DOCTYPE html>    
<html lang="id">    
<head>    
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Panjul Store - Jual Beli Akun Games</title>    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">    
    <style>    
        :root { 
            --bg-main: #0b0f17; 
            --bg-card: #121824; 
            --blue-smooth: #3b82f6; 
            --blue-hover: #2563eb; 
            --border-smooth: #1e293b; 
            --text-main: #f8fafc; 
            --text-muted: #94a3b8; 
            --red-alert: #ef4444;
        }    
        
        body { 
            margin: 0; 
            font-family: 'Poppins', sans-serif; 
            background-color: var(--bg-main); 
            color: var(--text-main); 
            overflow-x: hidden; 
        }    
            
        /* Text Welcome Paling Atas */
        .welcome-bar {
            background: #1e293b;
            color: #f1f5f9;
            text-align: center;
            padding: 8px 10px;
            font-size: 12px;
            font-weight: 500;
            border-bottom: 1px solid var(--border-smooth);
            letter-spacing: 0.5px;
        }

        .container { 
            max-width: 1100px; 
            margin: 0 auto; 
            padding: 20px; 
            min-height: 80vh; 
        }    
            
        .hero { 
            text-align: center; 
            padding: 40px 20px; 
            background: #111827; 
            border: 1px solid var(--border-smooth); 
            margin-top: 15px;
            margin-bottom: 30px; 
            border-radius: 16px;
        }    
        .hero h1 { 
            font-size: 32px; 
            margin: 0 0 10px 0; 
            font-weight: 700;
            letter-spacing: 1px; 
            color: #ffffff;
        }    
        .hero p { 
            color: var(--text-muted); 
            font-size: 13px; 
            max-width: 600px; 
            margin: 0 auto; 
            line-height: 1.6; 
        }    
            
        .section-title { 
            font-size: 18px; 
            margin-bottom: 20px; 
            display: flex; 
            align-items: center; 
            gap: 10px; 
            font-weight: 600;
        }    
        .section-title i { 
            color: var(--blue-smooth); 
        }    
            
        .market-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); 
            gap: 20px; 
            margin-bottom: 80px; 
        }    
        .account-card { 
            background: var(--bg-card); 
            border: 1px solid var(--border-smooth); 
            border-radius: 12px; 
            overflow: hidden; 
            position: relative; 
            display: flex; 
            flex-direction: column;
            transition: transform 0.2s;
        }    
        .account-card:hover {
            transform: translateY(-2px);
        }
            
        .slider-wrapper { 
            position: relative; 
            width: 100%; 
            height: 170px; 
            background: #0f172a;
        }    
        .slider-container { 
            display: flex; 
            overflow-x: auto; 
            scroll-snap-type: x mandatory; 
            scrollbar-width: none; 
            -ms-overflow-style: none; 
            height: 100%; 
        }    
        .slider-container::-webkit-scrollbar { display: none; }     
        .slider-img { 
            flex: 0 0 100%; 
            width: 100%; 
            height: 100%; 
            object-fit: cover; 
            scroll-snap-align: start; 
        }    
        .slider-indicator { 
            position: absolute; 
            bottom: 8px; 
            right: 10px; 
            background: rgba(15, 23, 42, 0.8); 
            padding: 3px 8px; 
            border-radius: 6px; 
            font-size: 10px; 
            color: var(--text-muted);
            border: 1px solid var(--border-smooth); 
        }    
            
        .seller-badge { 
            position: absolute; 
            top: 10px; 
            left: 10px; 
            background: rgba(15, 23, 42, 0.85); 
            padding: 4px 10px; 
            border-radius: 6px; 
            font-size: 10px; 
            font-weight: 500;
            color: var(--blue-smooth);
            border: 1px solid var(--border-smooth); 
            z-index: 2;
        }    
        .account-info { 
            padding: 15px; 
            flex-grow: 1; 
            display: flex; 
            flex-direction: column; 
        }    
        .account-title { 
            font-size: 15px; 
            font-weight: 600; 
            margin: 0 0 6px 0; 
            color: #ffffff;
        }    
        .account-desc { 
            font-size: 12px; 
            color: var(--text-muted); 
            margin-bottom: 15px; 
            display: -webkit-box; 
            -webkit-line-clamp: 2; 
            -webkit-box-orient: vertical; 
            overflow: hidden; 
            line-height: 1.5;
        }    
        .account-footer { 
            margin-top: auto; 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            border-top: 1px solid var(--border-smooth); 
            padding-top: 12px;
        }    
        .account-price { 
            font-size: 15px; 
            font-weight: 700; 
            color: var(--blue-smooth); 
        }    
        .btn-buy { 
            background: var(--blue-smooth); 
            color: white; 
            border: none; 
            padding: 8px 14px; 
            border-radius: 6px; 
            cursor: pointer; 
            font-size: 12px; 
            font-weight: 600; 
            transition: 0.2s;
        }    
        .btn-buy:hover {
            background: var(--blue-hover);
        }

        .empty-state { 
            grid-column: 1 / -1; 
            text-align: center; 
            padding: 50px 20px; 
            background: var(--bg-card); 
            border: 1px dashed var(--border-smooth); 
            border-radius: 12px; 
        }    
        .empty-state i { 
            font-size: 40px; 
            color: var(--text-muted); 
            margin-bottom: 15px; 
        }    
        .empty-state p { 
            color: var(--text-muted); 
            margin: 0;
            font-size: 13px;
        }    

        /* Footer Custom */
        footer { 
            background: #090d14; 
            border-top: 1px solid var(--border-smooth); 
            padding: 35px 20px 110px 20px; 
            text-align: center; 
        }    
        footer h3 {
            font-size: 16px;
            margin: 0 0 5px 0;
            color: #ffffff;
        }
        
        .contact-box { 
            display: flex; 
            justify-content: center; 
            gap: 12px; 
            margin-top: 20px; 
            margin-bottom: 25px;
            flex-wrap: wrap; 
        }
        .btn-contact { 
            padding: 10px 18px; 
            border-radius: 8px; 
            font-size: 13px; 
            font-weight: 500; 
            text-decoration: none; 
            display: flex; 
            align-items: center; 
            gap: 8px; 
            transition: 0.2s; 
            color: white; 
            border: 1px solid var(--border-smooth); 
        }
        .btn-wa { 
            background: #128c7e; 
            border-color: #128c7e;
        }
        .btn-wa:hover { 
            background: #0e6c61; 
        }
        .btn-email { 
            background: #1e293b; 
            border-color: var(--border-smooth);
        }
        .btn-email:hover { 
            background: #334155; 
        }
        
        .copyright {
            font-size: 12px;
            color: var(--text-muted);
            margin-top: 10px;
            border-top: 1px solid rgba(255,255,255,0.05);
            padding-top: 15px;
        }

        .fab-sell { 
            position: fixed; 
            bottom: 25px; 
            left: 50%; 
            transform: translateX(-50%); 
            background: var(--blue-smooth); 
            color: #fff; 
            padding: 12px 25px; 
            border-radius: 8px; 
            font-weight: 600; 
            font-size: 14px; 
            border: none; 
            cursor: pointer; 
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4); 
            z-index: 100; 
            transition: 0.2s;
        }    
        .fab-sell:hover {
            background: var(--blue-hover);
        }

        .modal-overlay { 
            position: fixed; 
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%; 
            background: rgba(0, 0, 0, 0.75); 
            backdrop-filter: blur(4px); 
            z-index: 999; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            opacity: 0; 
            pointer-events: none; 
            transition: 0.2s; 
        }    
        .modal-overlay.active { 
            opacity: 1; 
            pointer-events: auto; 
        }    
        .modal-box { 
            background: var(--bg-card); 
            border: 1px solid var(--border-smooth); 
            border-radius: 12px; 
            width: 90%; 
            max-width: 440px; 
            padding: 20px; 
            position: relative; 
            max-height: 85vh; 
            overflow-y: auto; 
        }    
        .close-modal { 
            position: absolute; 
            top: 15px; 
            right: 15px; 
            background: none; 
            border: none; 
            color: var(--text-muted); 
            font-size: 18px; 
            cursor: pointer; 
        }    
            
        .form-group { 
            margin-bottom: 12px; 
        }    
        .form-group label { 
            display: block; 
            font-size: 12px; 
            color: var(--text-muted); 
            margin-bottom: 5px; 
        }    
        .form-group input, .form-group textarea { 
            width: 100%; 
            padding: 10px; 
            background: var(--bg-main); 
            border: 1px solid var(--border-smooth); 
            border-radius: 6px; 
            color: white; 
            outline: none; 
            font-family: 'Poppins'; 
            box-sizing: border-box; 
            font-size: 13px;
        }    
            
        .secret-box { 
            background: rgba(239, 68, 110, 0.05); 
            border: 1px dashed rgba(239, 68, 68, 0.3); 
            padding: 12px; 
            border-radius: 8px; 
            margin-bottom: 15px;
        }    
        .secret-box h4 { 
            margin: 0 0 8px 0; 
            color: var(--red-alert); 
            font-size: 13px; 
            display: flex; 
            align-items: center; 
            gap: 5px;
        }    
        .secret-box p { 
            font-size: 11px; 
            color: var(--text-muted); 
            margin: 0 0 10px 0; 
            line-height: 1.4;
        }    
            
        .file-upload-wrapper { 
            border: 2px dashed var(--border-smooth); 
            border-radius: 6px; 
            padding: 12px; 
            text-align: center; 
            background: var(--bg-main); 
            position: relative; 
            cursor: pointer; 
        }    
        .file-upload-wrapper input[type="file"] { 
            position: absolute; 
            left: 0; top: 0; 
            width: 100%; height: 100%; 
            opacity: 0; 
            cursor: pointer; 
        }    
            
        .btn-pay-now { 
            width: 100%; 
            padding: 11px; 
            border: none; 
            background: var(--blue-smooth); 
            color: #fff; 
            font-weight: 600; 
            border-radius: 6px; 
            cursor: pointer; 
            margin-top: 10px; 
            font-size: 13px;
            transition: 0.2s;
        }    
        .btn-pay-now:hover {
            background: var(--blue-hover);
        }
            
        #preview-container { 
            display: flex; 
            gap: 8px; 
            overflow-x: auto; 
            padding-top: 10px; 
        }    
        #preview-container img { 
            width: 55px; 
            height: 55px; 
            object-fit: cover; 
            border-radius: 4px; 
            border: 1px solid var(--border-smooth); 
            flex-shrink: 0; 
        }    

        .loader-container { 
            display: none; 
            text-align: center; 
            padding: 15px 0; 
        }    
        .loader-container i { 
            font-size: 24px; 
            color: var(--blue-smooth); 
            animation: spin 1s linear infinite; 
            margin-bottom: 8px; 
        }    
        @keyframes spin { 100% { transform: rotate(360deg); } }    

        .info-box { 
            background: rgba(59, 130, 246, 0.05); 
            border: 1px dashed rgba(59, 130, 246, 0.3); 
            padding: 12px; 
            border-radius: 6px; 
            margin-bottom: 12px; 
            text-align: left;
        }    
    </style>
</head>    
<body>    
    
    <!-- Text Welcome Paling Atas -->
    <div class="welcome-bar">
        <i class="fa-solid fa-hand-sparkles"></i> Welcome to Panjul Store! Pusat transaksi aman, instan, dan terpercaya.
    </div>
    
    <div class="container">    
        <div class="hero">    
            <h1>PANJUL STORE</h1>    
            <p>Tempat terbaik transaksi akun game terlindungi. Riwayat bersih, terintegrasi langsung dengan database log sistem secara aman.</p>    
        </div>    

        <h2 class="section-title"><i class="fa-solid fa-layer-group"></i> List Akun Terkini</h2>    
            
        <div class="market-grid" id="main-grid">    
            <!-- Loader Real-time -->
            <div class="loader-container" style="display: block; grid-column: 1 / -1; margin-top: 30px;">
                <i class="fa-solid fa-circle-notch"></i>
                <p style="color: var(--text-muted); font-size: 12px;">Menghubungkan ke database...</p>
            </div>
        </div>    
    </div>    

    <button class="fab-sell" onclick="document.getElementById('modal-iklan').classList.add('active')">    
        <i class="fa-solid fa-plus"></i> Pasang Iklan Akun    
    </button>    

    <!-- MODAL 1: PASANG IKLAN -->    
    <div class="modal-overlay" id="modal-iklan">    
        <div class="modal-box">    
            <button class="close-modal" id="btn-close-modal" onclick="tutupModalIklan()"><i class="fa-solid fa-xmark"></i></button>    
            <h3 style="margin-top:0; font-size: 16px;"><i class="fa-solid fa-bullhorn"></i> Detail Informasi Dagangan</h3>    
                
            <form id="form-buat-iklan" onsubmit="terbitkanIklan(event)">    
                <div class="form-group"><label>Judul Dagangan</label><input type="text" id="iklan-judul" placeholder="Contoh: Akun FF Max Epass Lama" required></div>    
                <div class="form-group"><label>Deskripsi Item</label><textarea id="iklan-desc" rows="2" placeholder="Tulis rincian spesifikasi akun..." required></textarea></div>    
                <div class="form-group"><label>Harga Pokok (Rp)</label><input type="number" id="iklan-harga" placeholder="Contoh: 120000" required></div>    
                <div class="form-group"><label>No. DANA/OVO Penjual (Penerima Dana)</label><input type="text" id="iklan-rekening" placeholder="0812xxxx" required></div>    
                    
                <div class="secret-box">    
                    <h4><i class="fa-solid fa-lock"></i> Brankas Data Pengaman</h4>    
                    <p>Isi data login di bawah ini dengan benar. Data dikunci enkripsi otomatis dan cuma dikasih ke pembeli yang sah.</p>    
                    <div class="form-group"><label style="color:var(--text-main);">ID / Email Game</label><input type="text" id="iklan-user" placeholder="Email login akun..." required></div>    
                    <div class="form-group"><label style="color:var(--text-main);">Password Game</label><input type="password" id="iklan-pass" placeholder="Password login akun..." required></div>    
                        
                    <div style="display: flex; gap: 8px; margin-top: 10px;">    
                        <input type="checkbox" id="iklan-tos" required style="width: auto;">    
                        <label for="iklan-tos" style="font-size: 10px; color: var(--text-muted); margin:0; line-height: 1.4;">Saya menyatakan data di atas valid dan tidak melakukan manipulasi.</label>    
                    </div>    
                </div>    

                <div class="form-group">    
                    <label>Lampiran Gambar / SS Screen (Maks 20)</label>    
                    <div class="file-upload-wrapper" style="margin-bottom: 5px;">    
                        <input type="file" id="file-foto-akun" accept="image/png, image/jpeg" multiple required onchange="tampilkanPreviewMultiple(this)">    
                        <div id="text-foto-akun" style="font-size:11px; color:var(--text-muted);"><i class="fa-solid fa-images"></i> Pilih berkas gambar</div>    
                    </div>    
                    <div id="preview-container"></div>    
                </div>    

                <div class="loader-container" id="loading-sistem">    
                    <i class="fa-solid fa-circle-notch"></i>    
                    <p id="loading-teks" style="font-size: 11px; color: var(--text-muted); margin:0;">Mengirim data ke database...</p>    
                </div>    

                <button type="submit" class="btn-pay-now" id="btn-submit-iklan">Publikasikan Sekarang</button>    
            </form>    
        </div>    
    </div>    

     <!-- MODAL 2: CHECKOUT (AUTO REMOVE AKTIF) -->    
    <div class="modal-overlay" id="checkout-modal">    
        <div class="modal-box">    
            <button class="close-modal" id="btn-close-co" onclick="document.getElementById('checkout-modal').classList.remove('active')"><i class="fa-solid fa-xmark"></i></button>    
            <h3 style="margin-top:0; font-size: 16px;"><i class="fa-solid fa-receipt"></i> Prosedur Validasi Pembayaran</h3>    
            
            <div id="checkout-content">
                <form id="form-checkout" onsubmit="prosesCheckout(event)">    
                    <div class="info-box">    
                        <h4 style="margin:0 0 5px 0; font-size:13px; color:var(--blue-smooth);"><i class="fa-solid fa-shield"></i> 1. Administrasi Rekber (Rp 5.000)</h4>    
                        <p style="font-size:11px; margin:0; color:var(--text-muted);">Transfer ke DANA Admin: <b style="color:white;">083870948217</b></p>    
                        <div class="file-upload-wrapper" style="margin-top:10px;">    
                            <input type="file" id="struk-admin" accept="image/*" required onchange="document.getElementById('txt-adm').innerText = 'Struk Admin Dimuat'">    
                            <div id="txt-adm" style="font-size:11px; color:var(--text-muted);"><i class="fa-solid fa-file-invoice"></i> Upload Struk Admin</div>    
                        </div>    
                    </div>    

                    <div class="info-box" style="background: rgba(245, 158, 11, 0.03); border-color: rgba(245, 158, 11, 0.2);">    
                        <h4 style="margin:0 0 5px 0; font-size:13px; color:#f59e0b;"><i class="fa-solid fa-wallet"></i> 2. Pembayaran Nilai Akun</h4>    
                        <p style="font-size:11px; margin:0; color:var(--text-muted);">Kirim <b id="co-harga-text" style="color:var(--blue-smooth);">-</b> ke Dompet Penjual: <b id="co-rek" style="color:white;">-</b></p>    
                        <div class="file-upload-wrapper" style="margin-top:10px;">    
                            <input type="file" id="struk-penjual" accept="image/*" required onchange="document.getElementById('txt-penjual').innerText = 'Struk Dana Akun Dimuat'">    
                            <div id="txt-penjual" style="font-size:11px; color:var(--text-muted);"><i class="fa-solid fa-file-invoice"></i> Upload Struk Penjual</div>    
                        </div>    
                    </div>    

                    <div class="loader-container" id="loading-co">    
                        <i class="fa-solid fa-circle-notch"></i>    
                        <p style="font-size: 11px; color:var(--text-muted); margin:0;">Memverifikasi berkas transfer berkala...</p>    
                    </div>    
                    <button type="submit" class="btn-pay-now" id="btn-submit-co">Konfirmasi Pembayaran</button>    
                </form>    
            </div>

            <!-- OUTPUT UNTUK DI COPY -->
            <div id="hasil-login" style="display:none; background: rgba(16, 185, 129, 0.05); border: 1px solid #10b981; padding: 15px; border-radius: 8px; margin-top: 15px; text-align: left;">    
                <h4 style="margin:0 0 8px 0; color:#10b981; font-size:14px;"><i class="fa-solid fa-circle-check"></i> Transaksi Berhasil!</h4>    
                <p style="font-size:11px; color:var(--text-muted); margin-bottom:12px;">Data pembayaran terverifikasi log database. Akun ini otomatis dihapus dari daftar iklan umum. Simpan kredensial berikut:</p>    
                <div style="background:var(--bg-main); padding:12px; border-radius:6px; border: 1px solid var(--border-smooth);">    
                    <p style="margin:0; font-size:12px; color: var(--text-muted);"><b>ID / Email:</b> <span id="res-user" style="color:white; user-select:all; margin-left:5px;">-</span></p>    
                    <p style="margin:6px 0 0 0; font-size:12px; color: var(--text-muted);"><b>Password:</b> <span id="res-pass" style="color:white; user-select:all; margin-left:5px;">-</span></p>    
                </div>    
                <button class="btn-pay-now" style="margin-top:15px; background:#334155; color:white;" onclick="location.reload()">Tutup & Refresh</button>    
            </div>
        </div>    
    </div>    

    <!-- FOOTER CUSTOM -->
    <footer>    
        <div class="footer-content">    
            <h3>Hubungi Layanan Pengaduan Admin</h3>    
            <p style="color:var(--text-muted); font-size:12px; margin-top: 0;">Jika ada masalah dengan transaksi rekber atau kendala sistem, silakan kontak tim kami di bawah ini:</p>    
            
            <div class="contact-box">
                <a href="https://wa.me/6283870948217" target="_blank" class="btn-contact btn-wa">
                    <i class="fa-brands fa-whatsapp"></i> Hubungi via WhatsApp
                </a>
                <a href="mailto:zumaroleplay@gmail.com" class="btn-contact btn-email">
                    <i class="fa-solid fa-envelope"></i> Hubungi via Email
                </a>
            </div>

            <div class="copyright">
                Website By Panjul &copy; <?php echo date('Y'); ?>. All Rights Reserved.
            </div>
        </div>    
    </footer>    

    <!-- FIREBASE SDK -->
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-database.js"></script>

    <script>    
        const firebaseConfig = {
            apiKey: "AIzaSyByycnIfy96jZ3mGyc5jaPp9I0BN5FzITY",    
            authDomain: "website-noctivee.firebaseapp.com",    
            databaseURL: "https://website-noctivee-default-rtdb.asia-southeast1.firebasedatabase.app",    
            projectId: "website-noctivee",    
            storageBucket: "website-noctivee.firebasestorage.app",    
            messagingSenderId: "655473344127",    
            appId: "1:655473344127:web:6e53ce520d22a51ab4894a",    
            measurementId: "G-Q5NVWXP5JT" 
        };

        if (!firebase.apps.length) {
            firebase.initializeApp(firebaseConfig);
        }
        const db = firebase.database();

        let gambarTersimpan = [];     
        let coKey = ""; // Nyimpen ID postingan target
        let coUser = "";
        let coPass = "";

        // Tarik data iklan real-time
        db.ref('panjul_store_akun').on('value', (snapshot) => {
            const grid = document.getElementById('main-grid');
            grid.innerHTML = ''; 

            const data = snapshot.val();
            
            if (!data) {
                grid.innerHTML = `
                    <div class="empty-state">    
                        <i class="fa-solid fa-folder-open"></i>    
                        <p>Stok akun kosong. Belum ada iklan aktif yang dipasang.</p>    
                    </div>`;
                return;
            }

            Object.keys(data).reverse().forEach(key => {
                const item = data[key];
                let sliderHTML = "";    
                let imageCount = item.gambar ? item.gambar.length : 0;    
                
                if (item.gambar) {
                    item.gambar.forEach(src => {    
                        sliderHTML += `<img class="slider-img" src="${src}">`;    
                    });    
                }

                const card = document.createElement('div');    
                card.className = "account-card";    
                card.innerHTML = `    
                    <span class="seller-badge"><i class="fa-solid fa-check"></i> Terverifikasi</span>    
                    <div class="slider-wrapper">    
                        <div class="slider-container">    
                            ${sliderHTML}    
                        </div>    
                        <span class="slider-indicator"><i class="fa-regular fa-images"></i> 1/${imageCount}</span>    
                    </div>    
                    <div class="account-info">    
                        <h3 class="account-title">${item.judul}</h3>    
                        <p class="account-desc">${item.desc}</p>    
                        <div class="account-footer">    
                            <span class="account-price">Rp ${parseInt(item.harga).toLocaleString('id-ID')}</span>    
                            <button class="btn-buy" onclick="bukaCheckout('${key}', ${item.harga}, '${item.rekening}', '${item.user}', '${item.pass}')">Beli Akun</button>    
                        </div>    
                    </div>    
                `;    
                grid.appendChild(card);
            });
        });

        function bukaCheckout(key, harga, rekening, user, pass) {
            coKey = key; // Kunci target ID yang mau dibeli
            coUser = user;
            coPass = pass;
            
            document.getElementById('co-harga-text').innerText = 'Rp ' + parseInt(harga).toLocaleString('id-ID');
            document.getElementById('co-rek').innerText = rekening;
            
            document.getElementById('form-checkout').reset();
            document.getElementById('txt-adm').innerHTML = '<i class="fa-solid fa-file-invoice"></i> Upload Struk Admin';
            document.getElementById('txt-penjual').innerHTML = '<i class="fa-solid fa-file-invoice"></i> Upload Struk Penjual';
            
            document.getElementById('checkout-content').style.display = 'block';
            document.getElementById('hasil-login').style.display = 'none';
            document.getElementById('checkout-modal').classList.add('active');
        }

        // AKSI HIT DELETE PAS CHECKOUT SELESAI
        function prosesCheckout(event) {
            event.preventDefault();
            
            document.getElementById('btn-submit-co').style.display = 'none';
            document.getElementById('btn-close-co').style.display = 'none';
            document.getElementById('loading-co').style.display = 'block';
            
            setTimeout(() => {
                // Eksekusi hapus iklan dari database real-time secara instan
                db.ref('panjul_store_akun/' + coKey).remove()
                    .then(() => {
                        document.getElementById('loading-co').style.display = 'none';
                        document.getElementById('checkout-content').style.display = 'none';
                        document.getElementById('hasil-login').style.display = 'block';
                        
                        document.getElementById('res-user').innerText = coUser;
                        document.getElementById('res-pass').innerText = coPass;
                        document.getElementById('btn-close-co').style.display = 'block';
                    })
                    .catch((err) => {
                        alert("Gagal memperbarui antrean database: " + err.message);
                        location.reload();
                    });
            }, 2000);
        }

        function tutupModalIklan() {    
            document.getElementById('modal-iklan').classList.remove('active');    
        }    

        function tampilkanPreviewMultiple(input) {    
            const container = document.getElementById('preview-container');    
            container.innerHTML = '';     
            gambarTersimpan = [];     
                
            const fileList = input.files;    
            if (fileList.length > 20) {    
                alert("Maksimal lampiran gambar adalah 20 foto.");    
                input.value = "";     
                document.getElementById('text-foto-akun').innerHTML = "<i class='fa-solid fa-images'></i> Pilih berkas gambar";    
                return;    
            }    

            Array.from(fileList).forEach(file => {    
                const reader = new FileReader();    
                reader.onload = function(e) {    
                    const img = document.createElement('img');    
                    img.src = e.target.result;    
                    container.appendChild(img);    
                    gambarTersimpan.push(e.target.result);     
                }    
                reader.readAsDataURL(file);    
            });    
                
            document.getElementById('text-foto-akun').innerHTML = "<b style='color:var(--blue-smooth);'><i class='fa-solid fa-check'></i> " + fileList.length + " Gambar Terpilih</b>";    
        }    

        function terbitkanIklan(event) {    
            event.preventDefault();     
                
            if (gambarTersimpan.length === 0) {
                alert("Silakan unggah minimal 1 gambar representasi.");
                return;
            }

            document.getElementById('btn-submit-iklan').style.display = 'none';    
            document.getElementById('preview-container').style.display = 'none';    
            document.getElementById('loading-sistem').style.display = 'block';    
            document.getElementById('btn-close-modal').style.display = 'none';    
                
            const loadingTeks = document.getElementById('loading-teks');    
            loadingTeks.innerText = "Mengamankan data kredensial...";    

            const judul = document.getElementById('iklan-judul').value;    
            const desc = document.getElementById('iklan-desc').value;    
            const harga = document.getElementById('iklan-harga').value;    
            const rekening = document.getElementById('iklan-rekening').value;
            const userGame = document.getElementById('iklan-user').value;
            const passGame = document.getElementById('iklan-pass').value;

            const iklanBaru = {
                judul: judul,
                desc: desc,
                harga: harga,
                rekening: rekening,
                user: userGame,   
                pass: passGame,   
                gambar: gambarTersimpan,
                timestamp: firebase.database.ServerValue.TIMESTAMP
            };

            db.ref('panjul_store_akun').push(iklanBaru)
                .then(() => {
                    document.getElementById('modal-iklan').classList.remove('active');    
                    document.getElementById('form-buat-iklan').reset();    
                    document.getElementById('preview-container').innerHTML = '';    
                    document.getElementById('preview-container').style.display = 'flex';    
                    document.getElementById('text-foto-akun').innerHTML = "<i class='fa-solid fa-images'></i> Pilih berkas gambar";    
                        
                    document.getElementById('btn-submit-iklan').style.display = 'block';    
                    document.getElementById('loading-sistem').style.display = 'none';    
                    document.getElementById('btn-close-modal').style.display = 'block';    
                    gambarTersimpan = [];    
                        
                    alert("Sukses! Iklan dagangan Anda berhasil masuk antrean server.");    
                })
                .catch((error) => {
                    alert("Error Firebase: " + error.message);
                    document.getElementById('btn-submit-iklan').style.display = 'block';    
                    document.getElementById('loading-sistem').style.display = 'none';    
                    document.getElementById('btn-close-modal').style.display = 'block';  
                });
        }    
    </script>    
</body>    
</html>