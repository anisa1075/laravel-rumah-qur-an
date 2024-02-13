import React from 'react';
import fotoQuran from "../../../public/img/logo/pngtree-illustration-of-al-quran-cartoon-vector-icon-isolated-on-transparent-background-png-image_6122476-removebg-preview.png";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import {  } from "@fortawesome/free-solid-svg-icons";
import { faWhatsapp, faInstagram, faYoutube, faFacebook } from "@fortawesome/free-brands-svg-icons";
import {motion} from 'framer-motion'
import {fadeIn} from '../variants'

const Welcome = () => {
    return (
        <div className='a md:px-14 px-4 py-10 max-w-screen-2xl mx-auto bg-pink-100'>
            
            <motion.div 
            variants={fadeIn("up", 0.1)}
            initial="hidden"
            whileInView={"show"}
            viewport={{ once: false, amount: 0.7 }}
            className="my-28 md:my-8 flex flex-col md:flex-row-reverse items-center justify-between
                    gap-12 ">
                <img src={fotoQuran} alt="" width="30%" />
                <p><h2 className='a text-3xl text-pink-500 font-semibold mb-2 font-Alegreya animate-pulse'>Selamat Datang di website Rumah Qur'an Qu</h2>
                    Assalamu'alaikum Sahabat Qur'an..
                    Terimakasih sudah berkunjung di website ini. <br />
                    Ini adalah website sistem informasi Yayasan Rumah Qur'an Qu. <br />
                    Kalian beruntung bisa berkunjung di website ini. <br />
                    Itu berarti kalian sudah ingin menjadi umat yang ingin belajar Al-qur'an <br /><br />
                    
                    <h2 className="a text-2sm font-semibold font-Poppins pb-5">Program ini Gratis! Untuk Anak Yatim Piatu dan Dhuafa</h2>
                            <a href="https://bit.ly/488Q8KF" target='blank' className="px-7 py-2 mb-8 bg-pink-400 text-white rounded hover:bg-pink-500
                            transition-all duration-300 hover:-translate-x-4 ">Program Gratis</a>

                    <h3 className='a font-bold text-2xl pb-4 mt-6'>Hubungi Media Sosial Rumah Qur'an Qu</h3>
                    <div className='a text-1xs'>

                    {/* <a href="https://wa.me/6285267794627" target='blank' className="px-3 py-2  bg-white text-pink-500 rounded hover:bg-pink-500
                            transition-all duration-300 hover:-translate-x-4 "><FontAwesomeIcon icon={faWhatsapp} className='a hover:text-white'></FontAwesomeIcon></a> */}
                    <a href="https://www.instagram.com/nisaa107_/" target='blank' className="px-3 py-2  bg-white text-pink-500 rounded hover:bg-pink-500
                            transition-all duration-300 hover:-translate-x-4 ml-4 "><FontAwesomeIcon icon={faInstagram} className='a hover:text-white'></FontAwesomeIcon></a>
                    <a href="https://youtube.com/@Nisaa107_?si=JnvxB2S3vludO_gI" target='blank' className="px-3 py-2  bg-white text-pink-500 rounded hover:bg-pink-500
                            transition-all duration-300 hover:-translate-x-4 ml-4 "><FontAwesomeIcon icon={faYoutube} className='a hover:text-white'></FontAwesomeIcon></a>
                    <a href="https://www.facebook.com/profile.php?id=100084997672098&mibextid=ZbWKwL" target='blank' className="px-3 py-2  bg-white text-pink-500 rounded hover:bg-pink-500
                            transition-all duration-300 hover:-translate-x-4 ml-4 "><FontAwesomeIcon icon={faFacebook} className='a hover:text-white'></FontAwesomeIcon></a>
                    </div>
                </p>
                
            </motion.div>
            
        </div>
    );
};

export default Welcome;