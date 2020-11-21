import React from "react";
import "../../App.css";
import AboutCards from "./AboutCards";
import "../Cards.css";
import Footer from "../Footer";
import CardItem from "../CardItem";

export default function Products() {
  return (
    <>
      <h1 className="products">ABOUT US</h1>;
      <AboutCards />
      <Footer />
    </>
  );
}
