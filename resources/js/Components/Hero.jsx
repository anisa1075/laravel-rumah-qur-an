import React from "react";
import { Carousel } from "flowbite-react";
import foto1 from "../../../public/img/logo/fotoank.png";
import foto2 from "../../../public/img/logo/20944800-removebg-preview.png";
import foto3 from "../../../public/img/logo/foto3.png";
const Home = () => {
    return (
        <div className="a bg-pink-50">
            <div className="px-4 lg:px-14 max-w-screen-2xl mx-auto min-h-screen h-screen">
                <Carousel className="w-full mx-auto sm:pb-5">

                    {/* hero 1 */}
                    <div
                        className="my-28 md:my-8 py-12 flex flex-col md:flex-row-reverse items-center justify-between
                    gap-12 ">
                        <div>
                            <img src={foto1} alt="" />
                        </div>

                        {/* hero text */}
                        <div className="md:w-1/2">
                            <h1 className="a font-Alegreya text-4xl font-semibold mb-4 text-black md:2-3/4 leading-snug pt-5">Membangun Generasi Qur'an <br /> di <span className="a text-pink-500 leading-snug">Rumah Qur'an Qu</span></h1>
                            <p className="a text-sm  mb-8 font-Poppins">
                             Sedang mencari tempat untuk belajar membaca Al-qur'an? Rumah Qur'an kami solusinya.
                                Yuk, buat anak-anak muslim muslimah dan para akhwati fillah. <br />
                                 Mari bergabung menjadi bagian Ahlul-qur'an dengan sungguh-sungguh mempelajari Al-qur'an
                            </p>

                            
                        </div>
                    </div>
                    {/* end hero 1 */}

                    {/* hero 2 */}
                    <div
                        className="my-28 md:my-8 py-12 flex flex-col md:flex-row-reverse items-center justify-between
                    gap-11 ">
                        <div>
                            <img src={foto2} alt="" width="80%" />
                        </div>

                        {/* hero text */}
                        <div className="md:w-1/2">
                            <h1 className="a font-Alegreya text-4xl font-semibold mb-4 text-black md:2-3/4 leading-snug pt-5">Rumah Qur'an Qu Mempunyai beberapa Program Al-qur'an</h1>
                            <p className="a text-sm  mb-8 font-Poppins">Seperti Tahsin, Tahfidzh, dan Belajar Iqro. <br />
                            Bukan hanya program al-qur'an, disini juga ada program terbaru di Rumah Qur'an dan ini gratis untuk selurah anak-anak yaitu Program Calistung "Baca Tulis Hitung" untuk putra-putri anda loh
                            </p>
                        </div>
                    </div>
                    {/* end hero 2 */}


                    {/* hero 3 */}
                    <div
                        className="my-28 md:my-8 py-12 flex flex-col md:flex-row-reverse items-center justify-between
                    gap-12 ">
                        <div>
                            <img src={foto3} alt="" width="80%" />
                        </div>

                        {/* hero text */}
                        <div className="md:w-1/2">
                            <h1 className="a font-Alegreya text-4xl font-semibold mb-4 text-black md:2-3/4 leading-snug pt-5">Mahkota Bagi Orang Tua 💞</h1>
                            <p className="a text-base  mb-8 font-Poppins">
                            Rasulullah bersabda, <strong>"Siapa menghafal Al-Qur'an, mengkajinya, dan mengamalkannya maka Allah akan memberikan mahkota bagi kedua orang tuanya dari cahaya yang terangnya seperti matahari."</strong> 
                            </p>
                        </div>
                    </div>
                    {/* end hero 3 */}

                </Carousel>
                
            </div>
            
        </div>
    );
};

export default Home;
