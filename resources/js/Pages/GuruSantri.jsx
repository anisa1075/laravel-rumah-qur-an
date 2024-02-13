import React from 'react';
import NavbarSantri from '../Components/NavbarSantri'
import Guru1 from '../Components/DataGuru';
import Footer from '../Components/Footer';

const GuruSantri = ({kategori, guru}) => {
    return (
        <>
            <NavbarSantri data={kategori}/>
            <Guru1 data={guru}/>
            <Footer/>
        </>
    );
};

export default GuruSantri;