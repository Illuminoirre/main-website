<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/vendor/bootstrap5/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/vendor/fontawesome-free/css/all.min.css">
    {{-- CSS --}}
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/styleRegistrasi.css">
    

    <link rel="shortcut icon" href="/img/epw-logo/logo-bg-blue.png" type="image/x-icon">
    <title>EPW 2022 | {{ $title }}</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg py-0">
        <div class="container-fluid">
            <div class="navbar-brand flex-lg-grow-1">
                <a href="#">
                <img src="/img/epw-logo/logo-white.png" alt="EPW Logo" width="60">
                </a>
            </div>
            <div class="navbar-rainbow">
                <div class="rainbow"></div>
                <div class="rainbow"></div>
                <div class="rainbow"></div>
                <div class="rainbow"></div>
            </div>
            <div class="col-md-6"></div>
        </div>
    </nav>

    <div class="container-fluid" style="background-color: #c5d8ab; display:block; margin:auto; padding-bottom:5rem;">
        <div class="container content">
            <div class="row">
                <div class="col-md-12 center  mt-3 mb-3">
                  <div class= "d-flex justify-content-center">  
                    <svg width="315" height="93" viewBox="0 0 315 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.00734 11.7748C4.00734 11.7748 46.2526 25.1845 111.431 23.0097C176.61 20.835 229.955 -2.26018 311 5.63971V75.8146C311 75.8146 294.137 67.4006 243.013 73.5218C191.889 79.643 73.9664 101.453 4 79.2469L4.00734 11.7748Z" fill="#FDE7B6"/>
                        <path d="M4.00734 11.7748C4.00734 11.7748 46.2526 25.1845 111.431 23.0097C176.61 20.835 229.955 -2.26018 311 5.63971V75.8146C311 75.8146 294.137 67.4006 243.013 73.5218C191.889 79.643 73.9664 101.453 4 79.2469L4.00734 11.7748Z" stroke="#E56848" stroke-width="8" stroke-miterlimit="10"/>
                        <path d="M70.0773 43.6077L86.7159 43.8226L86.9541 50.1622L86.3781 50.1548C85.51 47.9887 84.5904 46.5047 83.6194 45.7028C82.6486 44.8795 81.214 44.4556 79.3154 44.4311L78.1955 44.4166L78.0678 54.3038L79.1557 54.3179C80.1583 54.3308 81.0057 53.9684 81.698 53.2306C82.3905 52.4715 82.8837 51.4538 83.1775 50.1775L83.6575 50.1836L83.5352 59.6549L82.9912 59.6478C82.6279 58.043 82.12 56.895 81.4676 56.2039C80.8364 55.513 79.9556 55.1603 78.825 55.1457L78.0571 55.1357L77.9244 65.4069L79.1403 65.4226C81.1028 65.4479 82.7743 64.8828 84.1546 63.7272C85.5563 62.5719 86.525 61.0803 87.0607 59.2524L87.7006 59.2606L87.3545 66.2327L69.788 66.0058L69.7971 65.3019L71.6849 65.3263L71.9561 44.336L70.0682 44.3117L70.0773 43.6077Z" fill="#C8684E"/>
                        <path d="M93.8853 44.6052L103.293 44.7267C106.514 44.7683 108.907 45.2686 110.474 46.2276C112.04 47.1653 112.808 48.8286 112.777 51.2178C112.743 53.8629 111.76 55.6743 109.827 56.6521C108.023 57.5462 105.511 57.9725 102.29 57.9309L102.034 57.9276L101.923 66.5029L105.923 66.5545L105.915 67.1625L93.596 67.0034L93.6039 66.3954L95.6837 66.4223L95.9573 45.24L93.8775 45.2132L93.8853 44.6052ZM102.197 45.3206L102.042 57.3196L102.714 57.3283C103.994 57.3448 104.885 56.919 105.386 56.0507C105.888 55.1825 106.152 53.7671 106.177 51.8046L106.197 50.2687C106.221 48.4555 106.002 47.1833 105.542 46.4519C105.104 45.7209 104.277 45.3475 103.061 45.3318L102.197 45.3206Z" fill="#C8684E"/>
                        <path d="M128.201 43.0523C124.894 43.0096 123.2 46.1773 123.117 52.5555L123.085 55.0833C123.046 58.1123 123.452 60.4965 124.304 62.2356C125.157 63.9534 126.437 64.8234 128.143 64.8454C130.49 64.8757 132.674 62.6211 134.695 58.0815L135.271 58.0889L134.955 65.2214L134.603 65.2169C134.478 64.9806 134.363 64.8191 134.257 64.7324C134.152 64.6243 133.993 64.5689 133.779 64.5662C133.587 64.5637 132.817 64.7244 131.469 65.0484C130.121 65.351 128.753 65.4933 127.367 65.4754C123.89 65.4305 121.204 64.4571 119.308 62.5551C117.434 60.6534 116.521 57.8254 116.569 54.071C116.618 50.2953 117.648 47.3964 119.658 45.3742C121.689 43.3523 124.39 42.3631 127.761 42.4066C129.062 42.4234 130.329 42.6104 131.562 42.9677C132.816 43.304 133.55 43.4734 133.764 43.4762C133.977 43.479 134.137 43.4384 134.245 43.3544C134.353 43.2491 134.473 43.08 134.604 42.847L134.956 42.8515L135.122 49.7983L134.546 49.7908C133.614 47.6239 132.643 45.9686 131.634 44.8248C130.646 43.66 129.502 43.0691 128.201 43.0523Z" fill="#C8684E"/>
                        <path d="M152.467 44.1571C152.485 42.7279 153.119 41.5627 154.368 40.6614C155.617 39.7601 157.479 39.3254 159.953 39.3574C162.428 39.3894 164.32 39.8725 165.631 40.8069C166.963 41.7415 167.617 43.126 167.593 44.9605C167.586 45.5578 167.525 46.1011 167.412 46.5903C167.3 47.0583 167.048 47.5564 166.657 48.0847C166.288 48.592 165.919 49.0459 165.551 49.4465C165.205 49.8474 164.601 50.373 163.739 51.0233C162.446 52.0307 161.089 53.0372 159.668 54.0429C158.247 55.0273 157.418 55.6034 157.181 55.771L155.211 57.1536L162.89 57.2528C164.362 57.2718 165.412 56.9654 166.038 56.3334C166.665 55.7015 167.116 54.7045 167.389 53.3426L167.933 53.3496L167.499 62.2088L152.46 62.0145L152.508 58.3028L155.778 55.3688C158.001 53.392 159.581 51.631 160.519 50.0856C161.456 48.5189 161.937 46.797 161.962 44.9198C161.986 43.0213 161.8 41.7281 161.404 41.0403C161.007 40.3311 160.329 39.9703 159.369 39.9579C158.409 39.9455 157.734 40.1822 157.344 40.6678C156.954 41.1535 156.756 41.6203 156.75 42.0683C156.744 42.5162 156.803 42.9117 156.927 43.2546L157.887 43.267C158.051 43.7172 158.13 44.2623 158.121 44.9022C158.113 45.5208 157.84 46.0613 157.3 46.5237C156.761 46.9648 156.055 47.1797 155.18 47.1684C154.305 47.1571 153.626 46.871 153.143 46.31C152.681 45.728 152.456 45.0104 152.467 44.1571Z" fill="#C8684E"/>
                        <path d="M179.543 59.4519C176.45 59.4119 174.106 58.3362 172.512 56.2248C170.939 54.1136 170.177 51.1809 170.226 47.4265C170.274 43.6722 171.174 40.8889 172.926 39.0767C174.677 37.2432 177.047 36.3457 180.033 36.3843C183.041 36.4231 185.386 37.3708 187.069 39.2274C188.773 41.0842 189.599 44.0178 189.547 48.0281C189.496 52.0385 188.594 54.9604 186.842 56.7939C185.09 58.6061 182.657 59.4921 179.543 59.4519ZM176.796 46.6793L176.759 49.5271C176.732 51.5962 176.724 53.0576 176.734 53.9111C176.766 54.7649 176.872 55.6517 177.052 56.5715C177.232 57.4912 177.534 58.0925 177.957 58.3753C178.38 58.6368 178.88 58.7712 179.456 58.7787C180.032 58.7861 180.459 58.7596 180.737 58.6992C181.036 58.6391 181.294 58.5144 181.51 58.3252C181.747 58.1149 181.942 57.9147 182.094 57.7247C182.246 57.5133 182.367 57.1948 182.458 56.7693C182.57 56.344 182.661 55.9505 182.729 55.5887C182.798 55.2269 182.847 54.6941 182.878 53.9905C182.938 52.6258 182.977 51.2502 182.995 49.8637L183.032 47.0479C183.086 42.8669 182.96 40.1664 182.656 38.9464C182.373 37.7053 181.507 37.0754 180.056 37.0566C178.606 37.0379 177.712 37.6557 177.376 38.9102C177.04 40.1646 176.846 42.7543 176.796 46.6793Z" fill="#C8684E"/>
                        <path d="M194.467 37.1571C194.485 35.7279 195.119 34.5627 196.368 33.6614C197.617 32.7601 199.479 32.3254 201.953 32.3574C204.428 32.3894 206.32 32.8725 207.631 33.8069C208.963 34.7415 209.617 36.126 209.593 37.9605C209.586 38.5578 209.525 39.1011 209.412 39.5903C209.3 40.0583 209.048 40.5564 208.657 41.0847C208.288 41.592 207.919 42.0459 207.551 42.4465C207.205 42.8474 206.601 43.373 205.739 44.0233C204.446 45.0307 203.089 46.0372 201.668 47.0429C200.247 48.0273 199.418 48.6034 199.181 48.771L197.211 50.1536L204.89 50.2528C206.362 50.2718 207.412 49.9654 208.038 49.3334C208.665 48.7015 209.116 47.7045 209.389 46.3426L209.933 46.3496L209.499 55.2088L194.46 55.0145L194.508 51.3028L197.778 48.3688C200.001 46.392 201.581 44.631 202.519 43.0856C203.456 41.5189 203.937 39.797 203.962 37.9198C203.986 36.0213 203.8 34.7281 203.404 34.0403C203.007 33.3311 202.329 32.9703 201.369 32.9579C200.409 32.9455 199.734 33.1822 199.344 33.6678C198.954 34.1535 198.756 34.6203 198.75 35.0683C198.744 35.5162 198.803 35.9117 198.927 36.2546L199.887 36.267C200.051 36.7172 200.13 37.2623 200.121 37.9022C200.113 38.5208 199.84 39.0613 199.3 39.5237C198.761 39.9648 198.055 40.1797 197.18 40.1684C196.305 40.1571 195.626 39.871 195.143 39.31C194.681 38.728 194.456 38.0104 194.467 37.1571Z" fill="#C8684E"/>
                        <path d="M212.467 35.1571C212.485 33.7279 213.119 32.5627 214.368 31.6614C215.617 30.7601 217.479 30.3254 219.953 30.3574C222.428 30.3894 224.32 30.8725 225.631 31.8069C226.963 32.7415 227.617 34.126 227.593 35.9605C227.586 36.5578 227.525 37.1011 227.412 37.5903C227.3 38.0583 227.048 38.5564 226.657 39.0847C226.288 39.592 225.919 40.0459 225.551 40.4465C225.205 40.8474 224.601 41.373 223.739 42.0233C222.446 43.0307 221.089 44.0372 219.668 45.0429C218.247 46.0273 217.418 46.6034 217.181 46.771L215.211 48.1536L222.89 48.2528C224.362 48.2718 225.412 47.9654 226.038 47.3334C226.665 46.7015 227.116 45.7045 227.389 44.3426L227.933 44.3496L227.499 53.2088L212.46 53.0145L212.508 49.3028L215.778 46.3688C218.001 44.392 219.581 42.631 220.519 41.0856C221.456 39.5189 221.937 37.797 221.962 35.9198C221.986 34.0213 221.8 32.7281 221.404 32.0403C221.007 31.3311 220.329 30.9703 219.369 30.9579C218.409 30.9455 217.734 31.1822 217.344 31.6678C216.954 32.1535 216.756 32.6203 216.75 33.0683C216.744 33.5162 216.803 33.9117 216.927 34.2546L217.887 34.267C218.051 34.7172 218.13 35.2623 218.121 35.9022C218.113 36.5208 217.84 37.0613 217.3 37.5237C216.761 37.9648 216.055 38.1797 215.18 38.1684C214.305 38.1571 213.626 37.871 213.143 37.31C212.681 36.728 212.456 36.0104 212.467 35.1571Z" fill="#C8684E"/>
                        </svg>
                </div>
                    
                </div>
            </div>
            <!-- section 1 -->
            <div class="row mb-3">
                <div class="col-md-12 d-flex">
                    <b>1. Akun Tim</b><span class="line flex-grow-1"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="namatim" class="form-label">Nama Tim*</label>
                        <input type="text" class="form-control" id="namatim" placeholder="Nama Tim">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="password*" class="form-label">Password*</label>
                        <input type="password" class="form-control" id="password*" placeholder="Password">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="usernametim" class="form-label">Username Tim*</label>
                        <input type="text" class="form-control" id="usernametim" placeholder="Username Tim">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="confirmpassword*" class="form-label">Confirm Password*</label>
                        <input type="password" class="form-control" id="confirmpassword*" placeholder="Confirm Password">
                    </div>
                </div>
            </div>

            <!-- Section 2-->
            <div class="row mb-3 mt-3">
                <div class="col-md-12 d-flex">
                    <b>2. Biodata Tim</b><span class="line flex-grow-1"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="asalsekolah" class="form-label">Asal Sekolah*</label>
                        <input type="text" class="form-control" id="asalsekolah" placeholder="Asal Sekolah">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="kota*" class="form-label">Kota*</label>
                        <input type="text" class="form-control" id="kota*" placeholder="Kota">
                    </div>
                </div>
            </div>
            <!-- ketua -->
            <div class="blok mb-2" style="background-color: #424a63; padding:1rem; color:white; border-radius:5px">Ketua</div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="namaketua" class="form-label">Nama Ketua*</label>
                        <input type="text" class="form-control" id="namaketua" placeholder="Nama Ketua">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nisnketua" class="form-label">NISN</label>
                        <input type="text" class="form-control" id="nisnketua" placeholder="NISN">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Alamat">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tempatlahirk" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempatlahirk" placeholder="Tempat Lahir">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nohp" class="form-label">No. Handphone</label>
                        <input type="text" class="form-control" id="nohp" placeholder="No. Handphone">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tanggallahirk" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggallahirk">
                    </div>
                </div>
            </div>

            <!-- anggota 1 -->
            <div class="blok mb-2" style="background-color: #424a63; padding:1rem; color:white; border-radius:5px">Anggota 1</div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="namaanggota1" class="form-label">Nama Anggota1*</label>
                        <input type="text" class="form-control" id="namaanggota1" placeholder="Nama Anggota 1">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nisna1" class="form-label">NISN</label>
                        <input type="text" class="form-control" id="nisna1" placeholder="NISN">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tempatlahira1" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempatlahira1" placeholder="Tempat Lahir">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tanggallahira1" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggallahira1">
                    </div>
                </div>
            </div>

            <!-- anggota 2 -->
            <div class="blok mb-2" style="background-color: #424a63; padding:1rem; color:white; border-radius:5px">
                <div class="d-flex justify-content-between">
                    <p>Anggota 2</p>
                    <div data-bs-toggle="collapse" data-bs-target="#anggota2" aria-expanded="false" aria-controls="anggota2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="collapse" id="anggota2">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="namaanggota2" class="form-label">Nama Anggota2*</label>
                        <input type="text" class="form-control" id="namaanggota2" placeholder="Nama Anggota 2">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nisna2" class="form-label">NISN</label>
                        <input type="text" class="form-control" id="nisna2" placeholder="NISN">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tempatlahira2" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempatlahira2" placeholder="Tempat Lahir">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tanggallahira2" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggallahira2">
                    </div>
                </div>
            </div>
            </div>

            <!-- dokumen -->
            <div class="row mb-3 mt-3">
                <div class="col-md-12 d-flex">
                    <b>3. Dokumen Pendukung</b><span class="line flex-grow-1"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    Upload Pas Foto
                </div>
                <div class="col-md-6">
                    Upload Scan Kartu Pelajar
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-3">
                    <input type="file" class="form-control custom-file-input" id="fotoketua">
                    <span class="plus"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
                        </svg></span>
                </div>
                <div class="col-md-6 mt-3">
                <input type="file" class="form-control custom-file-input" id="kartuketua">
                    <span class="plus"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
                        </svg></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-3">
                    <input type="file" class="form-control custom-file-input" id="fotoanggota1">
                    <span class="plus"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
                        </svg></span>
                </div>
                <div class="col-md-6 mt-3">
                <input type="file" class="form-control custom-file-input" id="kartuanggota1">
                    <span class="plus"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
                        </svg></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-3">
                    <input type="file" class="form-control custom-file-input" id="fotoanggota2">
                    <span class="plus"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
                        </svg></span>
                </div>
                <div class="col-md-6 mt-3">
                <input type="file" class="form-control custom-file-input" id="kartuanggota2">
                    <span class="plus"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
                        </svg></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-3">
                    Format : .jpg, max. Size: 5 Mb
                </div>
                <div class="col-md-6 mt-3">
                    Format : .jpg, max. Size: 5 Mb
                </div>
            </div>

            <!-- pembayaran -->
            <div class="row mb-3 mt-3">
                <div class="col-md-12 d-flex">
                    <b>4. Pembayaran</b><span class="line flex-grow-1"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="pembayaran">
                        <ol>
                            <li>1. Lorem ipsum dolor sit amet consectetur adipisicing</li>
                            <li>2. Lorem ipsum dolor sit amet consectetur adipisicing</li>
                            <li>3. Lorem ipsum dolor sit amet consectetur adipisicing</li>
                            <li>4. Lorem ipsum dolor sit amet consectetur adipisicing</li>
                            <li>5. Lorem ipsum dolor sit amet consectetur adipisicing</li>
                            <li>6. Lorem ipsum dolor sit amet consectetur adipisicing</li>
                        </ol>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <input type="file" class="form-control custom-file-input" id="buktipembayaran">
                                        <span class="plus"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                                <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
                                            </svg></span>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center" style="margin-top: 5px;">
                                    Format : .jpg, max. Size: 5 Mb
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- agreement -->
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="agreement">
                        <label class="form-check-label" for="agreement">
                            Saya menyatakan bahwa data/informasi/berkas yang saya sampaikan pada formulir ini adalah benar
                        </label>
                    </div>
                </div>
            </div>

            <!-- submit -->
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 d-flex justify-content-center">
                    <button type="button" class="btn" style="background-color: #424a63; color: white;">Daftar</button>
                </div>
            </div>
        </div>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
