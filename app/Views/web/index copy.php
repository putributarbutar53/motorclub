<?php $this->extend('web/layout/main') ?>
<?php $this->section('content') ?>
<div class="feature-section">
    <div class="container">
        <h2>Selamat Bergabung di Club Motor PBB</h2>
        <p>Club Motor XYZ menawarkan lebih dari sekadar hobi; kami menyediakan komunitas yang solid, teknologi terkini, dan didukung oleh anggota yang berpengalaman. Di sini, Anda akan menemukan kesempatan untuk menjalin hubungan, berbagi pengetahuan, dan merasakan kegembiraan berkendara tidak hanya dalam aspek teknis tetapi juga dalam hal persaudaraan dan petualangan. Kami berkomitmen untuk memberikan pengalaman yang berkesan dan mendalam, mempersiapkan Anda untuk menikmati setiap momen di jalanan dengan kepercayaan dan pengetahuan yang diperlukan untuk mengeksplorasi dunia luar dengan semangat</p>
    </div>
</div>
<div class="feature-section">
    <div class="container">
        <h2>Apa yang Kami Tawarkan?</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="<?= base_url('img/brain.png') ?>" alt="Inovasi" class="feature-icon" style="width: 70px; height: 70px;">
                <h3 class="feature-title">Inovasi</h3>
                <p class="feature-description">Kami mendorong inovasi dan kreativitas untuk menciptakan pengalaman berkendara yang baru dan menarik.</p>
            </div>
            <div class="col-md-4">
                <img src="<?= base_url('img/video-tutorials.png') ?>" alt="Panduan" class="feature-icon" style="width: 70px; height: 70px;">
                <h3 class="feature-title">Panduan</h3>
                <p class="feature-description">Tim kami akan memberikan panduan dan tips berkendara untuk membantu Anda menjelajahi perjalanan dengan lebih aman dan menyenangkan.</p>
            </div>
            <div class="col-md-4">
                <img src=<?= base_url('img/project-management.png') ?> alt="Kualitas" class="feature-icon" style="width: 70px; height: 70px;">
                <h3 class="feature-title">Kualitas</h3>
                <p class="feature-description">Dengan fokus pada kualitas, kami menjamin pengalaman berkendara yang memuaskan dan menyenangkan bagi seluruh anggota.</p>
            </div>
        </div>
    </div>
</div>

<?php $this->endsection() ?>