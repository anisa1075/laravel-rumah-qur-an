import React from 'react';
import NavbarSantri from '../Components/NavbarSantri'
import CardArtikelSantri from "../Components/CardArtikelSantri";
import Footer from '../Components/Footer'
const ArtikelSantri = ({artikel, kategori}) => {
    return (
        <>
            <NavbarSantri data={kategori}/>
            <CardArtikelSantri data={artikel}/>
            <Footer/>
        </>
    );
};

export default ArtikelSantri;