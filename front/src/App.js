import './App.css'
import { useQuery, gql } from '@apollo/client'

const GET_HELLO = gql`
  query {
    hello
  }
`

const App = () => {
  const { loading, error, data } = useQuery(GET_HELLO)

  return (
    <div className="App">
        {loading && <p>Loading...</p>}
        {error && <p>Error :{error}</p>}
        {data && <p>{data.hello}</p>}
    </div>
  );
}

export default App;
