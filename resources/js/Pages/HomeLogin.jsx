import React from 'react';
import NavbarGuru from '../Components/NavbarGuru';
import Hero from '../Components/Hero'
import Welcome from '../Components/Welcome';
import VisiMisi from '../Components/VisiMisi';
import Status from '../Components/Status';
import Footer from '../Components/Footer';

const HomeLogin = ({artikel},{user}) => {
    return (
        <>
            <NavbarGuru data={user}/>
            <Hero/>
            <Welcome data={artikel}/>
            <VisiMisi/>
            <Status/>
            <Footer/>
        </>
    );
};

export default HomeLogin;