<?php $this->extend('web/layout/main') ?>
<?php $this->section('content') ?>
<div class="feature-section">
    <div class="container">
        <h2>Kontak Kami</h2>
        <p>Jika Anda memiliki pertanyaan, komentar, atau ingin bermitra dengan kami, jangan ragu untuk menghubungi kami. Tim kami akan dengan senang hati membantu Anda. Berikut adalah informasi kontak kami:</p>
        <div class="row g-3 align-items-center">
            <div class="col-2">
                <label for="inputPassword6" class="col-form-label">Email</label>
            </div>
            <div class="col-6">
                <input class="form-control" type="text" value="butarbutarputri39@gmail.com" aria-label="readonly input example" readonly>
            </div>

        </div>
        <br>

        <div class="row g-3 align-items-center">
            <div class="col-2">
                <label for="inputPassword6" class="col-form-label">No HP</label>
            </div>
            <div class="col-6">
                <input class="form-control" type="text" value="082321666469" aria-label="readonly input example" readonly>
            </div>

        </div>
        <br>
        <div class="row g-3 align-items-center">
            <div class="col-2">
                <label for="inputPassword6" class="col-form-label">Fax</label>
            </div>
            <div class="col-6">
                <input class="form-control" type="text" value="+12345678" aria-label="readonly input example" readonly>
            </div>

        </div>
        <br>
        <p>Kami berharap dapat mendengar dari Anda segera!</p>
    </div>

    <!-- Tambahkan iframe untuk peta di bawah informasi kontak -->
    <div class="mx-auto" style="width: 600px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4466.585662270953!2d99.09875039544458!3d2.3458538630625663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e0767368a055d%3A0x9a00196b8f103efc!2sHUTA%20RIANIATE!5e0!3m2!1sid!2sid!4v1714054911700!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<?php $this->endsection() ?>