const getMyIp = async () => {
  try {
    const req = await fetch('http://php:80/api/get_my_ip.php');
    const result = await req.json();
    return result;
  } catch (error) {
    console.log(error);
    console.log('Unable To Find Ip Address');
  }
};

getMyIp().then((result) => console.log(result));
