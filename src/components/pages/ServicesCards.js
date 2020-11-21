import React from "react";
import "../Cards.css";
import AboutCardItem from "./AboutCardItem";

function ServicesCards() {
  return (
    <div className="cards">
      <h1>Add to cart!</h1>
      <h3 className="h3style"></h3>
      <div className="cards__container">
        <div className="cards__wrapper">
          <ul className="cards__items">
            <AboutCardItem
              src="images/appetizers.jpg"
              text="Lipsmacking sizzlers and appetizers."
              label="Starters"
              path="/"
            />
            <AboutCardItem
              src="images/indian.jpg"
              text="Indian, Chinese, Mexican and more!"
              label="Main Course"
              path="/"
            />
          </ul>
          <ul className="cards__items">
            <AboutCardItem
              src="images/rasgulla.jpg"
              text="Rasgulla to mysore pak we've got you covered!"
              label="Desert"
              path="/"
            />
            <AboutCardItem
              src="images/icecream.jpg"
              text="I scream you scream we ALL scream for icecream."
              label="Icecreams"
              path="/"
            />
            <AboutCardItem
              src="images/snack.jpg"
              text="Delhi chat and more!"
              label="Snacks"
              path="/sign-up"
            />
            <AboutCardItem
              src="images/coffee.jpg"
              text="Tea or Coffee?"
              label="Beverages"
              path="/sign-up"
            />
            <AboutCardItem
              src="images/smoothie.jpg"
              text="Milkshakes and smoothies?"
              label="Drinks"
              path="/sign-up"
            />
          </ul>
        </div>
      </div>
    </div>
  );
}

export default ServicesCards;
