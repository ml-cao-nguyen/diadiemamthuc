import React, { Component } from 'react'
import api from "../../../utils/api";

export default class UserList extends Component {
    constructor(props) {
        super(props);
        this.state = {
            user: []
        }
    }

    componentDidMount() {
        var apiUserListConfig = {
            url: `/user`,
            method: "GET",
            headers: {}
        };
        api.request(apiUserListConfig).then(
            (response) => {
                console.log("Thanh cong:", response)
            },
            (error) => {
                console.log("Loi:", error)
            }
        )
    }

    render () {
        return (
            <div>
                User
            </div>
        )
    }
}
