import React, { useEffect, useState } from "react";
import logo from "../../../public/img/logo/logorq2.png";
import baru from "../../../public/img/logo/baru.png";
import { Link } from "@inertiajs/react";

// react icon
import { FaXmark, FaBars } from "react-icons/fa6";
import { Hidden } from "@mui/material";
import { list } from "postcss";
import DetailProgram from "./DetailProgram";

const Navbar = ({data}) => {
    // dropdown program
    const [Open, setOpen] = useState(false)
    // end dropdown
    const [isMenuOpen, setIsMenuOpen] = useState(false);
    const [isSticky, setIsSticky] = useState(false);

    // set toggle menu
    const toggleMenu = () => {
        setIsMenuOpen(!isMenuOpen);
    };

    useEffect(() => {
        const handleScroll = () => {
            if (window.scrollY > 100) {
                setIsSticky(true);
            } else {
                setIsSticky(false);
            }
        };
        window.addEventListener("scroll", handleScroll);

        return () => {
            window.addEventListener("scroll", handleScroll);
        };
    });

    // navitem array
    // const navItems = [
    //     { link: "Home", path: "home" },
    //     { link: "Program", path: "program" },
    //     { link: "Guru", path: "guru" },
    //     { link: "Santri", path: "santri" },
    //     { link: "Artikel", path: "artikel" },
    // ];

    return (
        <header className="w-full bg-pink-300 md:bg-transparent fixed top-0 left-0 right-0">
            <nav
                className={`a bg-pink-100  lg:px-14 px-4 ${isSticky
                    ? "sticky top-0 left-0 right-0 border bg-white duration-300"
                    : ""
                    }`}
            >
                <div className="flex  justify-between items-center text-base gap-8">
                    <a
                        href=""
                        className="text-3xl font-semibold flex items-center space-x-2"
                    >
                        <img src={baru} alt="" width="20%" />
                        <span className=" text-zinc-950 font-Cookie text-4xl">
                            Rumah Qur'an Qu
                        </span>
                    </a>

                    {/* nav item for large device */}
                    <ul className="md:flex py-6 space-x-12 hidden font-Poppins mr-20 outline-none focus:outline-none">
                        <li className="a block text-base hover:text-pink-500 ">
                            <Link href="/">Home</Link>
                        </li>
                        <li className="relative justify-center">
                            <button onClick={() => setOpen(!Open)} href="" className="a relative flex justify-center items-center group" role="button">
                                Program
                            </button>
                            {
                                Open && (
                                    <div className="a bg-white p-4 w-52 shadow-lg absolute top-10">
                                        <ul>
                                        

                                            {data.map((kategori) => (

                                           
                                            <li className="a mb-4">
                                                
                                                <a href={`/detail/program/${kategori.id}`} Components={DetailProgram}  onClick={() => setOpen(false)} className="p-2 text-md-start cursor-pointer rounded hover:text-pink-500 hover:bg-pink-50">{kategori.nama_kategori}</a>
                                                
                                            </li>
                                             ))}
                                        </ul>
                                    </div>

                                )}


                        </li>
                        <li className="a block text-base hover:text-pink-500">
                            <a>
                                <Link href="/guru">Guru</Link>
                            </a>
                        </li>
                        <li className="a block text-base hover:text-pink-500">
                            <a>
                                <Link href="/santri">Santri</Link>
                            </a>
                        </li>
                        <li className="a block text-base hover:text-pink-500">
                            <a>
                                <Link href="/artikel">Artikel</Link>
                            </a>
                        </li>
                        <li className="a block text-base hover:text-pink-500">
                            <a>
                                <Link href="/testimoni">Testimoni</Link>
                            </a>
                        </li>
                    </ul>

                    {/* btn for large devices */}
                    <div className="space-x-12 hidden lg:flex items-center">
                        <a
                            href="/login"
                            className="text-default font-bold border-white border border-
default rounded-full py-2 px-10 transition-all duration-300 bg-pink-200 hover:bg-pink-300"
                        >
                            Login
                        </a>
                    </div>

                    {/* menu btn for only mobile  */}
                    <div className="md:hidden">
                        <button
                            onClick={toggleMenu}
                            className="focus:outline-none focus:text-black "
                        >
                            {isMenuOpen ? (
                                <FaXmark className="h-9 w-6 pt-4" />
                            ) : (
                                <FaBars />
                            )}
                        </button>
                    </div>
                    
                </div>

                {/* nav item for mobile */}
                <div
                    className={`a lg:hidden space-y-6 pl-14 px-6 mt-20 py-6 bg-pink-100 ${isMenuOpen
                        ? "block fixed top-0 right-0 left-0"
                        : "hidden"
                        }`}
                >
                    <li className="a block text-base hover:text-pink-500 ">
                        <a><Link href="/" className="a hover:text-white">
                            Home
                        </Link></a>
                    </li>
                    <li className="a block text-base relative justify-center">
                        <button onClick={() => setOpen(!Open)} href="" className="a relative flex justify-center items-center group" role="button">
                            Program
                        </button>
                        {
                            Open && (
                                <div className="a bg-white p-4 w-52 shadow-lg absolute top-10">
                                    <ul>
                                    {data.map((kategori) => (
                                        <li>

                                            <a href={`/detail/program/${kategori.id}`} onClick={() => setOpen(false)} className="p-2 text-md-start cursor-pointer rounded hover:text-pink-500 hover:bg-pink-50">{kategori.nama_kategori}</a>
                                        </li>
                                    ))}
                                    </ul>
                                </div>

                            )}
                    </li>
                    <li className="a block text-base hover:text-pink-500">
                        <a><Link href="/guru" className="a hover:text-white">
                            Guru
                        </Link></a>
                    </li>
                    <li className="a block text-base hover:text-pink-500">
                        <a>
                            <Link href="/santri" className="a hover:text-white">Santri</Link>
                        </a>
                    </li>
                    <li className="a block text-base hover:text-pink-500">
                        <a><Link href="/artikel" className="a hover:text-white">
                            Artikel
                        </Link></a>
                    </li>
                    <li className="a block text-base hover:text-pink-500">
                        <a><Link href="/testimoni" className="a hover:text-white">
                            Testimoni
                        </Link></a>
                    </li>
                    <li className="a block text-base hover:text-pink-500">
                        <a
                            href="/login"
                            className="text-default text-pink-500 border-white border border-
default rounded-full py-2 px-10 transition-all duration-300 hover:bg-pink-300 hover:text-white"
                        >
                            Login
                        </a>
                    </li>
                </div>
            </nav>
        </header>
    );
};

export default Navbar;
