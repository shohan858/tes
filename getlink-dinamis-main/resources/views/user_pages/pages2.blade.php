<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets_user/style.css') }} " />
    <script defer src="{{ asset('assets_user/main.js') }} "></script>
  </head>
  <body>
    <nav>
      <div class="navbar navAni">
        <div class="navbar-kiri">
          <button class="button-side">
            <img
              class="navbar-menu"
              src="{{ asset('assets_user/img/🦆 icon _menu_.png') }} "
              alt=""
            />
          </button>
          <img class="navbar-img" src="{{ asset('assets_user/img/logo-text2 1.png') }} " alt="" />
        </div>
      </div>
    </nav>

    <main>
      <div class="content">
        <div class="pages2-content">
          <div class="pages2-bagi">
            <div class="anim hidden pages2-kiri">
              <div class="content-top">
                <h1 class="pages2-h1">Buat Microsite</h1>
              </div>
              <div class="pages2-isi">
                <p class="pages2-tulisan1">
                  Silahkan masukkan beberapa informasi untuk membuat <br />
                  Microsite anda
                </p>
                <div class="pages2-garis">
                  <div class="pages2-garis-1"></div>
                  <div class="pages2-garis-2"></div>
                  <div class="pages2-garis-3"></div>
                </div>
                <h4 class="pages2-jenis">1. Tentukan Jenis Microsite</h4>
                <div class="pages2-kategori">
                  <button class="pages2-button1">
                    <svg
                      class="person"
                      width="30"
                      height="34"
                      viewBox="0 0 30 34"
                      fill="#39b5e0"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M15 16.472C16.2535 16.472 17.4557 15.9076 18.3421 14.9031C19.2284 13.8985 19.7264 12.536 19.7264 11.1154C19.7264 9.69473 19.2284 8.33226 18.3421 7.3277C17.4557 6.32314 16.2535 5.75879 15 5.75879C13.7465 5.75879 12.5443 6.32314 11.6579 7.3277C10.7716 8.33226 10.2736 9.69473 10.2736 11.1154C10.2736 12.536 10.7716 13.8985 11.6579 14.9031C12.5443 15.9076 13.7465 16.472 15 16.472ZM15 18.8254C8.71594 18.8254 4.6875 22.7556 4.6875 24.6692V28.2424H25.3125V24.6692C25.3125 22.355 21.4988 18.8254 15 18.8254Z"
                        fill="#39b5e0"
                      />
                    </svg>
                    Personal Branding
                  </button>
                  @foreach ($data as $item)
                    <button class="pages2-button2">
                      <img src="{{ asset('uploads/' . $item->icon ) }}" value="{{ $item->id }}" class="komu" width="30" height="34" alt="icon">
                      {{ $item->title }}
                    </button>
                    @endforeach
                  <button class="pages2-button3">
                    <svg
                      class="market"
                      width="30"
                      height="34"
                      viewBox="0 0 30 34"
                      fill="#ff78f0"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M24.5372 10.472H23.5337V20.91C23.5337 21.9413 22.7933 22.78 21.8837 22.78H8.12479C7.21489 22.78 6.47479 21.9413 6.47479 20.91V10.472H5.47129C4.97419 10.472 4.57129 10.9287 4.57129 11.492V24.412C4.57129 24.9754 4.97419 25.432 5.47129 25.432H24.5372C25.0343 25.432 25.4372 24.9754 25.4372 24.412V11.492C25.4372 10.9287 25.0343 10.472 24.5372 10.472ZM15.0041 24.531C14.7971 24.531 14.6291 24.3406 14.6291 24.106C14.6291 23.8714 14.7971 23.681 15.0041 23.681C15.2114 23.681 15.3791 23.8714 15.3791 24.106C15.3791 24.3406 15.2114 24.531 15.0041 24.531Z"
                        fill="#FF78F0"
                      />
                      <path
                        d="M17.7397 28.6946L17.6818 28.8411H12.3277L12.2695 28.6946C12.0517 28.1425 12.1567 27.4954 12.5341 27.0677L13.2274 26.282H16.7821L17.4754 27.0677C17.8525 27.4954 17.9578 28.1425 17.7397 28.6946Z"
                        fill="#FF78F0"
                      />
                      <path
                        d="M7.22461 6.21287V8.68807H22.7852V6.21287C22.7852 5.65187 22.3802 5.19287 21.8852 5.19287H8.12461C7.62961 5.19287 7.22461 5.65187 7.22461 6.21287ZM20.0097 6.94051C20.0097 6.70676 20.1784 6.51551 20.3847 6.51551H21.2247C21.4309 6.51551 21.5997 6.70676 21.5997 6.94051C21.5997 7.17426 21.4309 7.36551 21.2247 7.36551H20.3847C20.1784 7.36551 20.0097 7.17426 20.0097 6.94051ZM17.5047 6.94051C17.5047 6.70676 17.6734 6.51551 17.8797 6.51551H18.7197C18.9259 6.51551 19.0947 6.70676 19.0947 6.94051C19.0947 7.17426 18.9259 7.36551 18.7197 7.36551H17.8797C17.6734 7.36551 17.5047 7.17426 17.5047 6.94051ZM14.9997 6.94051C14.9997 6.70676 15.1684 6.51551 15.3747 6.51551H16.2147C16.4209 6.51551 16.5897 6.70676 16.5897 6.94051C16.5897 7.17426 16.4209 7.36551 16.2147 7.36551H15.3747C15.1684 7.36551 14.9997 7.17426 14.9997 6.94051Z"
                        fill="#FF78F0"
                      />
                      <path
                        d="M18.284 12.24C17.8597 12.24 17.5156 12.6299 17.5156 13.1108C17.5156 13.5918 17.8597 13.9817 18.284 13.9817C18.7084 13.9817 19.0525 13.5918 19.0525 13.1108C19.0525 12.6299 18.7085 12.24 18.284 12.24Z"
                        fill="#FF78F0"
                      />
                      <path
                        d="M18.2842 17.952C18.0774 17.952 17.9092 18.1338 17.9092 18.3572C17.9092 18.5806 18.0774 18.7624 18.2842 18.7624C18.491 18.7624 18.6592 18.5806 18.6592 18.3572C18.6592 18.1338 18.4909 17.952 18.2842 17.952Z"
                        fill="#FF78F0"
                      />
                      <path
                        d="M7.22461 9.53809V20.91C7.22461 21.471 7.62961 21.93 8.12461 21.93H21.8852C22.3802 21.93 22.7852 21.471 22.7852 20.91V9.53809H7.22461ZM16.2221 16.0982C16.2221 16.2824 16.1005 16.4375 15.939 16.4591L15.4242 16.5279C15.3608 16.8594 15.2454 17.1693 15.0879 17.4456L15.4096 17.9077C15.5103 18.0523 15.4996 18.2595 15.3846 18.3897L15.1838 18.6173C15.0689 18.7476 14.8861 18.7597 14.7585 18.6456L14.3508 18.281C14.107 18.4595 13.8336 18.5903 13.541 18.6621L13.4803 19.2456C13.4613 19.4286 13.3244 19.5665 13.1619 19.5665H12.878C12.7154 19.5665 12.5786 19.4285 12.5595 19.2456L12.4988 18.6621C12.2063 18.5903 11.9329 18.4595 11.689 18.281L11.2814 18.6456C11.1537 18.7597 10.971 18.7476 10.856 18.6173L10.6552 18.3897C10.5403 18.2595 10.5296 18.0523 10.6302 17.9077L10.9519 17.4456C10.7945 17.1693 10.679 16.8594 10.6157 16.5279L10.1008 16.4591C9.93937 16.4375 9.81775 16.2824 9.81775 16.0982V15.7764C9.81775 15.5922 9.9394 15.4371 10.1008 15.4155L10.6157 15.3467C10.679 15.0151 10.7945 14.7053 10.9519 14.429L10.6302 13.9669C10.5296 13.8223 10.5403 13.6151 10.6552 13.4848L10.856 13.2573C10.971 13.127 11.1537 13.1149 11.2814 13.229L11.689 13.5936C11.9329 13.4151 12.2063 13.2842 12.4988 13.2125L12.5595 12.629C12.5786 12.446 12.7154 12.3081 12.878 12.3081H13.1619C13.3245 12.3081 13.4613 12.446 13.4803 12.629L13.541 13.2125C13.8336 13.2842 14.107 13.4151 14.3508 13.5936L14.7585 13.229C14.8861 13.1149 15.0689 13.127 15.1838 13.2573L15.3846 13.4848C15.4996 13.6151 15.5103 13.8223 15.4096 13.9669L15.0879 14.429C15.2454 14.7053 15.3609 15.0151 15.4242 15.3467L15.939 15.4155C16.1005 15.4371 16.2221 15.5922 16.2221 15.7764V16.0982ZM20.1922 18.4531C20.1922 18.5629 20.1197 18.6553 20.0235 18.6682L19.7167 18.7092C19.6789 18.9068 19.6101 19.0914 19.5163 19.2561L19.708 19.5315C19.768 19.6177 19.7616 19.7411 19.6931 19.8188L19.5734 19.9544C19.5049 20.032 19.396 20.0393 19.3199 19.9713L19.077 19.754C18.9317 19.8604 18.7687 19.9383 18.5944 19.9811L18.5582 20.3289C18.5468 20.4379 18.4653 20.5201 18.3684 20.5201H18.1992C18.1023 20.5201 18.0208 20.4379 18.0094 20.3289L17.9732 19.9811C17.7989 19.9383 17.6359 19.8604 17.4906 19.754L17.2476 19.9713C17.1716 20.0393 17.0627 20.032 16.9942 19.9544L16.8745 19.8188C16.806 19.7411 16.7996 19.6177 16.8596 19.5315L17.0513 19.2561C16.9574 19.0914 16.8887 18.9068 16.8509 18.7092L16.5441 18.6682C16.4479 18.6553 16.3754 18.5629 16.3754 18.4531V18.2613C16.3754 18.1515 16.4479 18.0591 16.5441 18.0462L16.8509 18.0052C16.8887 17.8076 16.9575 17.623 17.0513 17.4583L16.8596 17.1829C16.7996 17.0967 16.806 16.9732 16.8745 16.8956L16.9942 16.76C17.0627 16.6824 17.1716 16.6751 17.2476 16.7431L17.4906 16.9604C17.6359 16.8541 17.7989 16.7761 17.9732 16.7333L18.0094 16.3855C18.0207 16.2765 18.1023 16.1943 18.1992 16.1943H18.3684C18.4653 16.1943 18.5468 16.2765 18.5582 16.3855L18.5944 16.7333C18.7687 16.7761 18.9317 16.8541 19.077 16.9604L19.3199 16.7431C19.396 16.6751 19.5049 16.6824 19.5734 16.76L19.6931 16.8956C19.7616 16.9732 19.768 17.0967 19.708 17.1829L19.5163 17.4583C19.6101 17.623 19.6789 17.8076 19.7167 18.0052L20.0235 18.0462C20.1197 18.0591 20.1922 18.1515 20.1922 18.2613V18.4531ZM20.1922 13.2068C20.1922 13.3166 20.1197 13.409 20.0235 13.4219L19.7167 13.4629C19.6789 13.6605 19.6101 13.8451 19.5163 14.0098L19.708 14.2852C19.768 14.3714 19.7616 14.4949 19.6931 14.5725L19.5734 14.7081C19.5049 14.7857 19.396 14.793 19.3199 14.725L19.077 14.5077C18.9317 14.614 18.7687 14.692 18.5944 14.7349L18.5582 15.0826C18.5468 15.1916 18.4653 15.2737 18.3684 15.2737H18.1992C18.1023 15.2737 18.0208 15.1916 18.0094 15.0826L17.9732 14.7349C17.7989 14.692 17.6359 14.614 17.4906 14.5077L17.2476 14.725C17.1716 14.793 17.0627 14.7857 16.9942 14.7081L16.8745 14.5725C16.806 14.4949 16.7996 14.3714 16.8596 14.2852L17.0513 14.0098C16.9574 13.8451 16.8887 13.6605 16.8509 13.4629L16.5441 13.4219C16.4479 13.409 16.3754 13.3166 16.3754 13.2068V13.015C16.3754 12.9052 16.4479 12.8128 16.5441 12.7999L16.8509 12.7589C16.8887 12.5614 16.9575 12.3767 17.0513 12.212L16.8596 11.9366C16.7996 11.8504 16.806 11.727 16.8745 11.6493L16.9942 11.5137C17.0627 11.4361 17.1716 11.4288 17.2476 11.4969L17.4906 11.7141C17.6359 11.6078 17.7989 11.5298 17.9732 11.487L18.0094 11.1392C18.0207 11.0302 18.1023 10.948 18.1992 10.948H18.3684C18.4653 10.948 18.5468 11.0302 18.5582 11.1392L18.5944 11.487C18.7687 11.5298 18.9317 11.6078 19.077 11.7141L19.3199 11.4969C19.396 11.4288 19.5049 11.4361 19.5734 11.5137L19.6931 11.6493C19.7616 11.727 19.768 11.8504 19.708 11.9366L19.5163 12.212C19.6101 12.3767 19.6789 12.5613 19.7167 12.7589L20.0235 12.7999C20.1197 12.8128 20.1922 12.9052 20.1922 13.015V13.2068Z"
                        fill="#FF78F0"
                      />
                      <path
                        d="M13.0196 13.9993C12.0767 13.9993 11.3096 14.8686 11.3096 15.9373C11.3096 17.0059 12.0767 17.8753 13.0196 17.8753C13.9625 17.8753 14.7296 17.0059 14.7296 15.9373C14.7296 14.8686 13.9625 13.9993 13.0196 13.9993ZM13.0196 17.0253C12.4902 17.0253 12.0596 16.5372 12.0596 15.9373C12.0596 15.3373 12.4902 14.8493 13.0196 14.8493C13.5489 14.8493 13.9796 15.3373 13.9796 15.9373C13.9796 16.5372 13.5489 17.0253 13.0196 17.0253Z"
                        fill="#FF78F0"
                      />
                    </svg>
                    Marketing
                  </button>
                  <button class="pages2-button4">
                    <svg
                      class="umk"
                      width="30"
                      height="34"
                      viewBox="0 0 30 34"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M13.75 28.3333H26.25V14.1666C26.25 12.6018 25.1307 11.3333 23.75 11.3333H18.75M13.75 22.6666H13.7625M21.25 22.6666H21.2625M8.75 22.6666H8.7625M13.75 17H13.7625M21.25 17H21.2625M8.75 17H8.7625M13.75 11.3333H13.7625M8.75 11.3333H8.7625M18.75 28.3333V8.49996C18.75 6.93515 17.6307 5.66663 16.25 5.66663H6.25C4.86929 5.66663 3.75 6.93515 3.75 8.49996V28.3333H18.75Z"
                        stroke="#F5EA5A"
                        stroke-width="3"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                    UMKM
                  </button>
                  <button class="pages2-button5">
                    <svg
                      class="cv"
                      width="30"
                      height="30"
                      viewBox="0 0 30 34"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M22.3472 28.1375H7.63379C7.17431 28.1375 6.79883 28.5574 6.79883 29.0837C6.79883 29.6045 7.16942 30.03 7.63379 30.03H22.3522C22.8117 30.03 23.1872 29.61 23.1872 29.0837C23.1822 28.5574 22.8117 28.1375 22.3472 28.1375Z"
                        fill="#6B75E6"
                      />
                      <path
                        d="M22.3472 23.9938H7.63379C7.17431 23.9938 6.79883 24.4137 6.79883 24.9401C6.79883 25.4608 7.16942 25.8864 7.63379 25.8864H22.3522C22.8117 25.8864 23.1872 25.4663 23.1872 24.9401C23.1822 24.4138 22.8117 23.9938 22.3472 23.9938Z"
                        fill="#6B75E6"
                      />
                      <path
                        d="M14.9903 3.96997C13.014 3.96997 11.3984 5.79542 11.3984 8.04079C11.3984 10.2806 13.014 12.106 14.9903 12.106C16.9667 12.106 18.5822 10.2805 18.5822 8.03516C18.5822 5.78979 16.9667 3.96997 14.9903 3.96997ZM14.9903 10.2079C13.9379 10.2079 13.0733 9.22796 13.0733 8.03525C13.0733 6.84253 13.933 5.86264 14.9903 5.86264C16.0477 5.86264 16.9073 6.84253 16.9073 8.03525C16.9073 9.22788 16.0427 10.2079 14.9903 10.2079Z"
                        fill="#6B75E6"
                      />
                      <path
                        d="M19.7581 14.1499C16.7097 12.806 13.2808 12.806 10.2325 14.1499C9.23441 14.5922 8.56743 15.7177 8.56743 16.9552V20.7964C8.56246 21.3172 8.93802 21.7427 9.3975 21.7427H20.5882C21.0477 21.7427 21.4232 21.3228 21.4232 20.7964V16.9552C21.4232 15.7177 20.7562 14.5922 19.7581 14.1499ZM19.7581 19.8557H10.2325V16.9608C10.2325 16.5016 10.4746 16.0761 10.8352 15.9193C13.4983 14.749 16.4923 14.749 19.1554 15.9193C19.5161 16.0817 19.7582 16.4961 19.7582 16.9608V19.8557H19.7581Z"
                        fill="#6B75E6"
                      />
                      <path
                        d="M23.928 0H10.0496C9.40728 0 8.8045 0.279946 8.35 0.795143L4.35785 5.31949C3.90334 5.83469 3.65625 6.51775 3.65625 7.24568V31.2674C3.65625 32.7737 4.7383 33.9999 6.06728 33.9999H23.9329C25.262 33.9999 26.344 32.7736 26.344 31.2674V2.7325C26.3292 1.22632 25.2472 0 23.928 0ZM8.56239 3.22527V5.56583H6.49718L8.56239 3.22527ZM24.6642 10.1182H21.5614C21.1019 10.1182 20.7265 10.5382 20.7265 11.0645C20.7265 11.5853 21.097 12.0108 21.5614 12.0108H24.6642V13.6907H23.5278C23.0683 13.6907 22.6928 14.1106 22.6928 14.637C22.6928 15.1577 23.0634 15.5833 23.5278 15.5833H24.6642V31.273C24.6642 31.7377 24.3332 32.1129 23.928 32.1129H6.05253C5.64739 32.1129 5.31639 31.7377 5.31639 31.2786V7.45287H9.39742C9.8569 7.45287 10.2324 7.03295 10.2324 6.50658V1.88141H23.928C24.3332 1.88141 24.6642 2.25654 24.6642 2.7157V10.1182Z"
                        fill="#6B75E6"
                      />
                    </svg>
                    Curiculum Vitae
                  </button>
                  <div class="pages2-lanjut">
                    <div class="pages2-bungkus1">
                      <p class="pages2-pilih">2. Pilih Template dan Tema</p>
                      <p class="pages2-pilih">3. Pilih Nama Microsite</p>
                    </div>
                    <a class="pages2-lanjutkan" href="{{ url('template_microsite') }}"
                      >Lanjutkan ></a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="anim hidden pages2-kanan">
              <div class="pages2-gambar2">
                <img src="{{ asset('assets_user/img/webdesin.png') }} " alt="" width="100%" />
                <h2 class="pages2-preview">Preview Template</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <aside class="aniLeft">
      <div class="aside">
        <a href="dashboard.html">
          <button class="aside-button">Dashboard</button>
        </a>
        <a href="index.html">
          <button class="aside-button">Microsite</button>
        </a>
      </div>
    </aside>

    <script>
      const buttons = document.querySelectorAll(
        ".pages2-button1, .pages2-button2, .pages2-button3, .pages2-button4, .pages2-button5"
      );
      const specialClasses = [
        "special1",
        "special2",
        "special3",
        "special4",
        "special5",
      ];

      const spesSvg = [
        "spesSvg1",
        "spesSvg2",
        "spesSvg3",
        "spesSvg4",
        "spesSvg5",
      ];

      buttons.forEach((button, index) => {
        button.addEventListener("click", () => {
          buttons.forEach((btn) => {
            specialClasses.forEach((cls) => {
              btn.classList.remove(cls);
            });
            spesSvg.forEach((asa) => {
              btn.classList.remove(asa);
            });
          });
          button.classList.add(specialClasses[index]);
          button.classList.add(spesSvg[index]);
        });
      });
    </script>
  </body>
</html>