import React from 'react';
import Artikel1 from "../../../public/img/logo/Islamic-Wallpaper-Al-Quran-Karim-1024x768.jpg";
import { usePage } from '@inertiajs/react';

const ShowArtikel = ({ data }) => {
    // id
    const { artikel } = usePage().props;

    // bersihkan tag html
    const renderHTML = (htmlString) => {
        return { __html: htmlString };
      };
      
    return (


        <div className='a bg-pink-50'>

            <h1 className='a pt-32 pb-5 text-pink-500 text-center font-Alegreya font-semibold text-4xl'>Deskripsi Artikel</h1>



            {artikel && (
                <div>




                    <div className='a pb-10'>

                    
                
                
                        <figure class="max-w-lg mx-auto">


                            <img class=" shadow-lg mx-auto max-w-sm lg:max-w-full rounded-lg bg-white" src={`/storage/${artikel.img}`} alt="image description" />
                            <figcaption class="font-BeVietnamPro text-sm text-center text-black dark:text-gray-400 mt-4">Nama Author : {artikel.author}</figcaption>
                            <figcaption class="font-BeVietnamPro text-base text-center text-black dark:text-gray-400">Judul Artikel : {artikel.judul}</figcaption>

                        </figure>
                    

                        
                        
                        <div className='a bg-white mx-10 my-6 rounded-md shadow-lg'>
                            <figcaption class="a pt-8 mt-4 font-bold uppercase font-Alegreya text-2xl text-center text-black dark:text-gray-400">"{artikel.judul}"</figcaption>
                            <p className='rounded shadow-lg px-16 py-8 text-base text-justify font-Poppins' dangerouslySetInnerHTML={renderHTML(artikel.deskripsi)}>

                            </p>
                        </div>
                        
                    </div>

                </div>
            )}




        </div>

    );
};

export default ShowArtikel;