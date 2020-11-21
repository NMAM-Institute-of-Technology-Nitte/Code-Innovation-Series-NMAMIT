import firebase from "firebase";

var firebaseApp = firebase.initializeApp({
  apiKey: "AIzaSyBVPviB5yWGOZZFnHVVU4_0T_G4ZXiAkf0",
  authDomain: "waitqrcontact.firebaseapp.com",
  databaseURL: "https://waitqrcontact.firebaseio.com",
  projectId: "waitqrcontact",
  storageBucket: "waitqrcontact.appspot.com",
  messagingSenderId: "603592388623",
  appId: "1:603592388623:web:42bafc8d9819eeecb2737a",
});

var db = firebaseApp.firestore();
export { db };
