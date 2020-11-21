import React from "react";
import "../Cards.css";
import AboutCardItem from "./AboutCardItem";

function AboutCards() {
  return (
    <div className="cards">
      <h1>What is WAITQR?</h1>
      <div className="cards__container">
        <div className="cards__wrapper">
          <ul className="cards__items">
            <AboutCardItem
              src="images/gap.jpg"
              text="We want to bridge the gap between customers and businesses by providing a safer environment to interact in."
              label="Our Story"
              path="/"
            />
            <AboutCardItem
              src="images/customer.jpg"
              text="We help you maintain your customers’ loyalty, engagement and advocacy."
              label="Why WAITQR"
              path="/"
            />
          </ul>
          <ul className="cards__items">
            <AboutCardItem
              src="images/waitqrlogo.png"
              text="This is a web app, hence no installations required. Just scan the QR code!"
              label="No Installations"
              path="/"
            />
            <AboutCardItem
              src="images/ai.jpg"
              text="This web app doesn’t consume a lot of data or slow down your phone. Place orders faster at your comfort."
              label="Efficient"
              path="/"
            />
            <AboutCardItem
              src="images/afterp.jpg"
              text="This app is going nowhere once the pandemic ends as the world needs us to ensure a smooth service."
              label="After Pandemic"
              path="/sign-up"
            />
            <AboutCardItem
              src="images/software.jpg"
              text="Software updates includes identifying regular customers, 
              offer discounts and recommend new hotels"
              label="Software Updates"
              path="/sign-up"
            />
          </ul>
        </div>
      </div>
    </div>
  );
}

export default AboutCards;
