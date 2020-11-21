import React from "react";
import "../../App.css";
import ServicesCards from "./ServicesCards";
import "../Cards.css";
import Footer from "../Footer";
export default function Services() {
  return (
    <>
      <h1 className="services">MENU</h1>
      <ServicesCards />
      <Footer />
    </>
  );
}
