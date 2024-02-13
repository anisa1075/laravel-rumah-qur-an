import React, { useEffect } from 'react';
import Navbar from '../Components/Navbar';
import Hero from '../Components/Hero'
import Welcome from '../Components/Welcome';
import VisiMisi from '../Components/VisiMisi';
import Status from '../Components/Status';
import Footer from '../Components/Footer';

function Home ({kategori, kategori1, guru, artikel, santri}) {
    useEffect(() => {
        document.title = 'Rumah Quran Qu'; // Ubah judul halaman di sini
      }, []);
    return (
        <>
            <Navbar data={kategori}/>
            <Hero/>
            <Welcome/>
            <VisiMisi/>
            <Status data={[kategori1, guru, artikel, santri]}/>
            <Footer/>
            
        </>
    );
};

export default Home;