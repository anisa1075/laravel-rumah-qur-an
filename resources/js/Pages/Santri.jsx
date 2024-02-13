import React from 'react';
import Navbar from '../Components/Navbar';
import DataSantri from '../Components/DataSantri';
import Footer  from '../Components/Footer';

const Santri = ({santri, kategori}) => {
    return (
        <>
            <Navbar data={kategori}/>
            <DataSantri data={santri}/>
            <Footer/>

        </>
    );
};

export default Santri;