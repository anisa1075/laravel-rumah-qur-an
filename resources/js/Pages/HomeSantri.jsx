import React from 'react';
import NavbarSantri from '../Components/NavbarSantri';
import Hero from '../Components/Hero'
import Welcome from '../Components/Welcome';
import VisiMisi from '../Components/VisiMisi';
import Status from '../Components/Status';
import Footer from '../Components/Footer';

const HomeSantri = ({kategori, kategori1, guru, artikel, santri, user}) => {
    return (
        <>
            <NavbarSantri data={[kategori, user]}/>
            <Hero/>
            <Welcome data={artikel}/>
            <VisiMisi/>
            <Status data={[kategori1, guru, artikel, santri]}/>
            <Footer/>
        </>
    );
};

export default HomeSantri;