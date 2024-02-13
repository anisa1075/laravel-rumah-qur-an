import React from 'react';
import NavbarSantri from '../Components/NavbarSantri';
import Hero from '../Components/Hero'
import Welcome from '../Components/Welcome';
import VisiMisi from '../Components/VisiMisi';
import Status from '../Components/Status';
import Footer from '../Components/Footer';

const HomeSantri1 = ({kategori, kategori1, guru, artikel, santri}) => {
    return (
        <div>
            <NavbarSantri data={kategori}/>
            <Hero/>
            <Welcome/>
            <VisiMisi/>
            <Status data={[kategori1, guru, artikel, santri]}/>
            <Footer/>
        </div>
    );
};

export default HomeSantri1;