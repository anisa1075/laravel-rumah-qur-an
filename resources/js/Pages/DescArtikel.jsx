import React from 'react';
import Navbar from '../Components/Navbar';
import ShowArtikel from '../Components/ShowArtikel'
import Footer from '../Components/Footer';

const DescArtikel = ({artikel, kategori}) => {
    return (
        <>
            <Navbar data={kategori}/>
            <ShowArtikel data={artikel}/>
            <Footer/>
        </>
    );
};

export default DescArtikel;