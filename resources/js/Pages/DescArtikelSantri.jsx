import React from 'react';
import NavbarSantri from '../Components/NavbarSantri'
import ShowArtikel from '../Components/ShowArtikel'
import Footer from '../Components/Footer';
const DescArtikelSantri = ({artikel, kategori}) => {
    return (
        <>
            <NavbarSantri data={kategori}/>
            <ShowArtikel data={artikel}/>
            <Footer/>
        </>
    );
};

export default DescArtikelSantri;