import React from 'react';
import NavbarSantri from '../Components/NavbarSantri'

import DataSantri from '../Components/DataSantri';
import Footer  from '../Components/Footer';
const SantriSantri = ({santri, kategori}) => {
    return (
        <>
            <NavbarSantri data={kategori}/>
            <DataSantri data={santri}/>
            <Footer/>
        </>
    );
};

export default SantriSantri;