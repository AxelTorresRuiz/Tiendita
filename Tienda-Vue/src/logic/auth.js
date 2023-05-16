const ENDPOINT_PATH = process.env.VUE_APP_URL;

import axios from "axios";
import Cookies from "js-cookie";


export default {
  register(email, password) {
    const user = { email, password };
    return axios.post(ENDPOINT_PATH + "regiser", user);
  },
  
  login(email, password){
    const user = { email, password };
    return axios.post(ENDPOINT_PATH + "login", user);
  },
  setUserLogged(userLogged) {
    Cookies.set("userLogged", userLogged);
  },
  getUserLogged() {
    return Cookies.get("userLogged");
  },
  deleteUserLogged() {
    Cookies.remove('userLogged');
  }
};