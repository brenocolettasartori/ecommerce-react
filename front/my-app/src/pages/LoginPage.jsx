import React, { Component, Fragment } from 'react'
import Nav from '../components/common/Nav'
import Footer from '../components/common/Footer'
import Login from '../components/common/Login'

class LoginPage extends Component {
  render() {

    const setUser = this.props.setUser;
    const user = this.props.user;

    return (
      <Fragment>
        <Nav/>
        <Login setUser = {setUser} user = {user}/>
        <Footer/>
      </Fragment>
    )
  }
}

export default LoginPage
