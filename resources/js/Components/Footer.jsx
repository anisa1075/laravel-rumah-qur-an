import React from 'react';
import logo from "../../../public/img/logo/logorq2.png";
import baru from "../../../public/img/logo/baru.png";

const Footer = () => {
    return (
        // < !--Footer Start-- >
    <footer class="a bg-pink-50 pt-24 pb-12 mx-auto">
      <div class="container">
        <div class="flex flex-wrap pl-20">
          <div class="w-full px-4 mb-12 font-medium md:w-1/3">
            <div className='a flex'>

            <img src={baru} alt="" width="22%" />
            <h2 class="font-bold pt-4 font-Cookie text-4xl text-black mb-5 ">RQQ</h2>
            </div>
            <h3 class="font-bold text-2xl mb-2">Hubungi Kami</h3>
            <p>anisa.nisa1075@gmail.com</p>
            <p>Jl. Maulana Malik Ibrahim </p>
            <p>Kota Jambi</p>
          </div>

          <div class="w-full px-4 mb-12 md:w-1/3">
            <h3 class="font-semibold text-xl  mb-5">Kategori Tulisan</h3>
            <ul class="">
              <li>
                <a href="#" class="inline-block text-base hover:text-primary mb-3"> Programming</a>
              </li>
              <li>
                <a href="#" class="inline-block text-base hover:text-primary mb-3">Teknologi</a>
              </li>
              <li>
                <a href="#" class="inline-block text-base hover:text-primary mb-3">Keislaman</a>
              </li>
            </ul>
          </div>

          <div class="w-full px-4 mb-12 md:w-1/3">
            <h3 class="font-semibold text-xl  mb-5">Kategori Tautan</h3>
            <ul class="">
              <li>
                <a href="#home" class="inline-block text-base hover:text-primary mb-3">Home</a>
              </li>
              <li>
                <a href="#about" class="inline-block text-base hover:text-primary mb-3">Program</a>
              </li>
              <li>
                <a href="#portfolio" class="inline-block text-base hover:text-primary mb-3">Guru</a>
              </li>
              <li>
                <a href="#clients" class="inline-block text-base hover:text-primary mb-3">Santri</a>
              </li>
              <li>
                <a href="#blog" class="inline-block text-base hover:text-primary mb-3">Artikel</a>
              </li>
              <li>
                <a href="#contact" class="inline-block text-base hover:text-primary mb-3">Testimoni</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="w-full pt-10 border-t border-slate-700">
          <div class="flex items-center justify-center  mb-5">
            {/* <!-- Youtube --> */}
            <a
              href="https://youtube.com/anisa"
              target="_blank"
              class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-pink-500 hover:text-white"
            >
              <svg
                role="img"
                width="20"
                class="fill-current"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>YouTube</title>
                <path
                  d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"
                />
              </svg>
            </a>

            {/* <!-- Instagram --> */}
            <a
              href="https://Instagram.com/nisaa107_"
              target="_blank"
              class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-pink-500 hover:text-white"
            >
              <svg
                role="img"
                width="20"
                class="fill-current"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>Instagram</title>
                <path
                  d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                />
              </svg>
            </a>

            {/* <!-- Twiter --> */}
            <a
              href="https://Twitter.com/anisa"
              target="_blank"
              class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-pink-500 hover:text-white"
            >
              <svg
                role="img"
                width="20"
                class="fill-current"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>Twitter</title>
                <path
                  d="M21.543 7.104c.015.211.015.423.015.636 0 6.507-4.954 14.01-14.01 14.01v-.003A13.94 13.94 0 0 1 0 19.539a9.88 9.88 0 0 0 7.287-2.041 4.93 4.93 0 0 1-4.6-3.42 4.916 4.916 0 0 0 2.223-.084A4.926 4.926 0 0 1 .96 9.167v-.062a4.887 4.887 0 0 0 2.235.616A4.928 4.928 0 0 1 1.67 3.148 13.98 13.98 0 0 0 11.82 8.292a4.929 4.929 0 0 1 8.39-4.49 9.868 9.868 0 0 0 3.128-1.196 4.941 4.941 0 0 1-2.165 2.724A9.828 9.828 0 0 0 24 4.555a10.019 10.019 0 0 1-2.457 2.549z"
                />
              </svg>
            </a>

            {/* <!-- Tik Tok --> */}
            <a
              href="https://tiktok.com/@anisa"
              target="_blank"
              class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-pink-500 hover:text-white"
            >
              <svg
                role="img"
                width="20"
                class="fill-current"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>TikTok</title>
                <path
                  d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"
                />
              </svg>
            </a>

            {/* <!-- Linkedin --> */}
            <a
              href="https://Linkedin.com/@anisa"
              target="_blank"
              class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-pink-500 hover:text-white"
            >
              <svg
                role="img"
                width="20"
                class="fill-current"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>LinkedIn</title>
                <path
                  d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"
                />
              </svg>
            </a>
          </div>

          <p class="font-medium text-xs text-slate-500 text-center ">Dibuat dengan <span class="text-pink-500">💗</span> Oleh 
            <a href="https://instagram.com/nisaa107_" target="_blank" class="font-bold text-primary"> Anisa</a> , menggunakan 
            <a href="https://tailwindcss.com" target="_blank" class="font-bold text-sky-500"> Tailwind CSS</a></p>
          
        </div>
      </div>
    </footer>




    );
};

export default Footer;