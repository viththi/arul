import React, {Component} from 'react';
import axios from 'axios';
import RecordsList from './RecordsList'

export default class View extends Component{

    constructor(props){
        super(props);
        this.state = {user: []};
    }

    componentDidMount(){
        axios.get('http://localhost/bizlogic/view.php')
        .then(response => {
            this.setState({user: response.data});
        })
        .catch(function(error){ 
            console.log(error);
        })
    }

    usersList(){
        return this.state.user.map(function(object, i){
            return <RecordsList obj = {object} key = {i}/>
        });
    }


    render(){
        return(
            <div>
                <h3 align="center"> USER LIST</h3>
                    <table className = "table table-striped" style={{marginTop: 50}}> 
                           <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                   
                                </tr>   
                            </thead> 
                            <tbody>
                                {this.usersList()}
                            </tbody>
                    </table>
                
            </div>
        )
    }
}