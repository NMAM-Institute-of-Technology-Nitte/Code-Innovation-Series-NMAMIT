import React from "react";
import "./Cards.css";
import CardItem from "./CardItem";

function Cards() {
  return (
    <div className="cards">
      <h1>Check out these Amazing reviews!</h1>
      <div className="cards__container">
        <div className="cards__wrapper">
          <ul className="cards__items">
            <CardItem
              src="images/resort.jpg"
              text="WAITQR has helped to bridge the gap between us and our customers. Their service is impeccable!"
              label="FineDine, MN"
              path="/services"
            />
            <CardItem
              src="images/luxehotel.jpg"
              text="Our customers were blown away when they realised all they had to do was scan the qr code. Thank you, WAITQR for helping us surprise our customers!"
              label="Luxe Hotels"
              path="/services"
            />
          </ul>
          <ul className="cards__items">
            <CardItem
              src="images/restaurant.jpg"
              text="Brilliantly executed idea by WAITQR. We can't believe our fear of not getting customers was solved with a scan!"
              label="MZC Restaurants"
              path="/services"
            />
            <CardItem
              src="images/smallhotel.jpg"
              text="Our first time opening after the lockdown. Didn't expect such a smooth experience in the first go!"
              label="Horseback Cafe"
              path="/products"
            />
            <CardItem
              src="images/hotelsmall.jpg"
              text="We are too happy to say anything at the moment. Thank you to the entire WAITQR team for making this happen!"
              label="Thirst Quench, BL"
              path="/sign-up"
            />
          </ul>
        </div>
      </div>
    </div>
  );
}

export default Cards;
