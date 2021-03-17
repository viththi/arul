import React, {Component} from 'react';

import {Redirect} from 'react-router';


class RecordsList extends Component{

    constructor(props){
        super(props);
        this.state = {
            redirect: false
        }
    }
   
    
    render(){

        const{ redirect} = this.state;

        if(redirect){
            return<Redirect to = '/view'/>
        }
        return(
            <tr>
                <td>
                    {this.props.obj.id}
                </td>
                <td>
                    {this.props.obj.name}
                </td>
                <td>
                    {this.props.obj.username}
                </td>
                <td>
                {this.props.obj.email}
                </td>
                
            </tr>
        )
    }
}

export default RecordsList;