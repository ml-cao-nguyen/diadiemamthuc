import React, { Component } from 'react';
import { Route, Switch } from "react-router";
import UserList from './components/User/UserList/UserList'
import logo from './logo.svg';
import './App.css';

class App extends Component {
  render() {
    return (
      <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <h1 className="App-title">Welcome to React</h1>
        </header>
        <div className="container">
          <Switch>
            <Route exact path='/user' component={ UserList }/>
          </Switch>
        </div>
      </div>
    );
  }
}

export default App;
