import React from 'react';
import quran from '../../../public/img/logo/quran.png'
import { usePage } from '@inertiajs/react';

const DetailProgram2 = ({data}) => {
    const { kategori } = usePage().props;

    const renderHTML = (htmlString) => {
        return { __html: htmlString };
    };


    // bersihkan tag html
    // const cleanHtml = html => {
    //     const doc = new DOMParser().parseFromString(html, 'text/html');
    //     return doc.body.textContent || "";
    // };
    // const cleanedContent = cleanHtml(kategori.deskripsi);

    return (

        <div className='a bg-white mx-auto'>
            <p className='a pt-36 pb-5 text-pink-500 text-center font-BeVietnamPro font-semibold text-3xl'>"Detail Program Rumah Qur'an Qu"</p>
            <h1 className='a pb-5 text-black text-center font-BeVietnamPro font-semibold text-2xl'>Apa Saja Persyaratan Program nya ?</h1>

            <div className='a md:px-14 px-4  py-5 max-w-screen-2xl mx-auto'>

                {kategori && (

                    <div
                        className="my-20 md:my-8 flex flex-col md:flex-row-reverse items-center justify-between
                        gap-12 mx-auto">


                        <div className='a lg:pr-40 pr-10 bg-pink-50 p-8 shadow-md rounded-sm'>

                            <h2 className='a text-4xl font-semibold font-Alegreya text-pink-500 animate-pulse '>Program {kategori.nama_kategori}</h2><br />
                            <h2 className='a text-2xl  font-semibold top-0 font-Alegreya text-pink-500'>Harga : {kategori.harga}</h2><br />
                            <p className='a font-Poppins text-2xl font-bold'>Berikut Syarat Program {kategori.nama_kategori} :</p>
                            <p className='a font-Poppins text-1xl py-6 gap-4' dangerouslySetInnerHTML={renderHTML(kategori.deskripsi)} ></p>

                            <a href='https://bit.ly/48cGpTG' target='blank' className='text-default text-black border-pink-50 bg-pink-200 border border-
default py-2 px-10 transition-all duration-300 hover:bg-pink-400 hover:text-white rounded-sm'>Daftar</a>
                            {/* <a href="/login" className='text-default text-black border-pink-50 bg-pink-200 border border-
default py-2 px-10 transition-all duration-300 hover:bg-pink-400 hover:text-white rounded-sm'>Login</a> */}
                        </div>



                        <img src={quran} alt="" className='a pt-10' width="40%" />

                    </div>

                )}



            </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 1440 320">
                                <path fill="#FDF2F8"
                                    fill-opacity="1"
                                    d="M0,32L21.8,32C43.6,32,87,32,131,32C174.5,32,218,32,262,58.7C305.5,85,349,139,393,154.7C436.4,171,480,149,524,154.7C567.3,160,611,192,655,197.3C698.2,203,742,181,785,181.3C829.1,181,873,203,916,186.7C960,171,1004,117,1047,117.3C1090.9,117,1135,171,1178,192C1221.8,213,1265,203,1309,192C1352.7,181,1396,171,1418,165.3L1440,160L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path></svg>

                        </div>




        </div>



    );
};

export default DetailProgram2;