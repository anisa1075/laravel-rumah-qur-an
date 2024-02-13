import React from "react";
import Navbar from "../Components/Navbar";
import CardArtikel from "../Components/CardArtikel";
import Footer from '../Components/Footer'



const Artikel = ({artikel, kategori}) => {
    return (
        <div>
            <Navbar data={kategori}/>
            <CardArtikel data={artikel}/>
            <Footer/>
        </div>
    );
};

export default Artikel;
