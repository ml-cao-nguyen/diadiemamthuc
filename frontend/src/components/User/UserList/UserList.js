import React, { Component } from 'react'
import axios from 'axios';

export default class UserList extends Component {
    constructor(props) {
        super(props);
        this.state = {
            user: []
        }
    }

  componentDidMount() {
        axios.get(`http://diadiemamthuc.tech/api/user`)
            .then(response => {
                console.log(response);
                this.setState({ user: response.data });
            })
            .catch(function (error) {
                console.log(error);
            })
  }
  render () {
    return (
      <tr>
        <td>
            { this.props.id}
        </td>
        <td>
            { this.props.title}
        </td>
        <td>
            { this.props.body} 
        </td>
      </tr>
    )
  }
}
