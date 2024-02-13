import React from 'react';
import quran from '../../../public/img/logo/quran.png'
// import oke from '../../../public/img/logo/logo2.png'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faEnvelope, faHouse } from '@fortawesome/free-solid-svg-icons'
import { motion } from 'framer-motion'
import { fadeIn } from '../variants'

const VisiMisi = () => {
    return (
        <div className=' bg-pink-100 '>

            <div className='a md:px-14 px-4  py-5 max-w-screen-2xl mx-auto'>

                <motion.div
                    variants={fadeIn("up", 0.6)}
                    initial="hidden"
                    whileInView={"show"}
                    viewport={{ once: false, amount: 0.9 }}
                    className="my-20 md:my-8 flex flex-col md:flex-row-reverse items-center justify-between
                    gap-12 ">

                    <p className='a font-Poppins text-2sm pb-32'><h2 className='a text-4xl  font-semibold font-Alegreya text-pink-500 animate-pulse '>__Visi Misi Rumah Qur'an Qu__</h2><br />
                        🌸 Melahirkan generasi Qur'ani <br />
                        🌸 Menyiapkan putra putri Islam yang mampu membaca Al-Quran dengan Tahsin <br /> yang benar dan memiliki hafalan sejak usia dini<br />
                        🌸 Menyiapkan para muslimah dan anak-anak yang memiliki ahlakul karimah, <br /> sikap dan prilaku yang terpuji.<br />

                        🌸 Membentuk Kepribadian yang cinta dengan Al-qur'an
                    </p>

                    <img src={quran} alt="" width="30%" />

                </motion.div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path
                    fill="#ffffff"
                    fill-opacity="1"
                    d="M0,96L60,101.3C120,107,240,117,360,144C480,171,600,213,720,192C840,171,960,85,1080,64C1200,43,1320,85,1380,106.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
                ></path>
            </svg>


        </div>



    );
};

export default VisiMisi;