import React, {Component} from 'react';
import axios from 'axios';

export default class Login extends Component{

    constructor(props){
        super(props);
        
        this.onChangeEmail = this.onChangeEmail.bind(this);
        this.onChangePassword = this.onChangePassword.bind(this);
        this.onSubmit = this.onSubmit.bind(this);

        this.state = {
            
            email: '',
            password: ''
        }
    }

    onChangeEmail(e){
        this.setState({
            email: e.target.value
        })
    }

    onChangePassword(e){
        this.setState({
            password: e.target.value
        })
    }

    onSubmit(e){
        e.preventDefault();

        const obj = {
            
            email: this.state.email,
            password: this.state.password
        };

        // console.log(obj);
        axios.post('http://localhost/bizlogic/login.php', obj)
        .then(res => console.log(res.data));

        this.setState({
            
            email: '',
            password: ''
        })
        
    }

    

    render(){
        return(
            <div style={{margin:10, width:500}}>
                <h3>Login</h3>
                <form onSubmit={this.onSubmit}>
                    
                    <div className="form-group">
                        <label>Email: </label>
                        <input type="email" className="form-control"
                        value={this.state.email}
                        onChange = {this.onChangeEmail}
                        />
                    </div>
                    <div className="form-group">
                        <label>Password: </label>
                        <input type="password" className="form-control"
                        value={this.state.password}
                        onChange = {this.onChangePassword}
                        />
                    </div>
                    <div className="form-group">
                        <input type="submit" className="btn btn-primary" value="Login"/>
                    </div>
                </form>
            </div>
        )
    }
}