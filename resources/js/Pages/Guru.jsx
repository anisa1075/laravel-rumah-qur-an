import React from 'react';
import Navbar from '../Components/Navbar';
import Guru1 from '../Components/DataGuru';
import Footer from '../Components/Footer';


const Guru = ({guru, kategori}) => {
    return (
        <>
            <Navbar data={kategori}/>
            <Guru1 data={guru}/>
            <Footer/>
        </>
    );
};

export default Guru;