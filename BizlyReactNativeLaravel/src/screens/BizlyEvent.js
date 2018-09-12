// BizlyEvent.js
import React, { Component } from 'react';
import { View, Text, StyleSheet } from 'react-native';
import ajax from '../services/FetchBizlyEvents';
import BizlyEventList from '../components/BizlyEventList';

const styles = StyleSheet.create({
    container: {
        flex: 1,
        justifyContent: 'center',
        backgroundColor: '#B6A6BB',
    }
})

export class BizlyEvent extends Component {

    state = {
        bizly_events: []
    }

    async componentDidMount() {
        const bizlyEvents = await ajax.fetchBizlyEvents();
        this.setState({bizly_events});
    }

    render() {
        return (
            <View style={styles.container}>
        {
            this.state.bizly_events.length > 0
                ? <BizlyEventList bizlyEvents={this.state.bizly_events} />
        : <Text>No events</Text>
        }
    </View>
    )
    }
}

export default BizlyEvent;